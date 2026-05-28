#!/usr/bin/env python3
"""Convert static HTML pages to WordPress PHP templates."""
import re
import sys
import os

BASE = '/Users/tomoyukikishi/Desktop/wordpress/tatoo'
THEME = os.path.join(BASE, 're-ink')
IMG_URI = "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img"

SLUGS = ['artists', 'tattoo', 'gallery', 'access', 'qa', 'pricing']

def esc_url(path):
    return f"<?php echo esc_url( home_url( '{path}' ) ); ?>"

def extract_page_css(html):
    """Extract page-specific CSS (everything after the common header/nav CSS)."""
    # Find the main <style> block in <head>
    m = re.search(r'<style>([\s\S]*?)</style>', html)
    if not m:
        return ''
    css = m.group(1)

    # Remove the Figma capture disable-animation block if present
    # (This is the second <style> block right before </head>)
    # We handle it in the full HTML stripping below.

    # Find where page-specific CSS starts (after .mobile-nav block ends)
    # We split on the HERO / page-hero marker
    split_markers = [
        r'/\*\s*={3,}\s*\n\s*HERO',
        r'/\*\s*={3,}\s*\n\s*(?:PAGE HERO|page-hero)',
        r'\.hero\s*\{',
        r'\.page-hero\s*\{',
    ]
    for marker in split_markers:
        parts = re.split(marker, css, maxsplit=1)
        if len(parts) == 2:
            # Find the original marker text to restore
            match = re.search(marker, css)
            if match:
                return '/* ============================\n' + match.group(0).lstrip('/*').lstrip() + parts[1]
    # Fallback: return full CSS
    return css

def convert(html, is_front=False):
    # -------- 0. Extract page-specific CSS before stripping head --------
    page_css = extract_page_css(html)

    # Remove Figma animation-disable <style> block
    html = re.sub(
        r'\s*<style>\s*\n\s*\.fi\s*\{\s*\n\s*opacity:\s*1\s*!important[^<]*?</style>',
        '', html)

    # -------- 1. Strip <head> block --------
    html = re.sub(r'^[\s\S]*?</head>\s*\n', '', html)

    # -------- 2. Remove <body ...> opening tag --------
    html = re.sub(r'<body[^>]*>\s*\n', '', html)

    # -------- 3. Remove site-header --------
    html = re.sub(
        r'\s*(?:<!-- ={3,}.*?HEADER.*?-->[ \t]*\n)?\s*<header class="site-header"[^>]*>[\s\S]*?</header>\s*\n',
        '\n', html)

    # -------- 4. Remove mobile-nav --------
    html = re.sub(
        r'\s*(?:<!-- ={3,}.*?MOBILE NAV.*?-->[ \t]*\n)?\s*<nav class="mobile-nav"[^>]*>[\s\S]*?</nav>\s*\n',
        '\n', html)

    # -------- 5. Remove footer + trailing scripts + </body></html> --------
    # Remove inline scripts after common-parts.js
    html = re.sub(r'\s*<script src="common-parts\.js"></script>[\s\S]*?</script>\s*\n', '\n', html)
    # Any remaining common-parts ref
    html = re.sub(r'\s*<script src="common-parts\.js"></script>', '', html)

    # Replace <footer class="footer"...>...</footer> with get_footer()
    html = re.sub(
        r'\s*<footer class="footer"[^>]*>[\s\S]*?</footer>',
        '\n\n<?php get_footer(); ?>',
        html)

    # Remove </body></html> if still present
    html = re.sub(r'\s*</body>\s*\n?\s*</html>\s*$', '\n', html)

    # -------- 6. Image paths --------
    # src="img/..." → src="URI/..."
    html = re.sub(r'src="img/', f'src="{IMG_URI}/', html)
    html = re.sub(r"src='img/", f"src='{IMG_URI}/", html)
    # url('img/...')  and  url("img/...")
    html = re.sub(r"url\('img/", f"url('{IMG_URI}/", html)
    html = re.sub(r'url\("img/', f'url("{IMG_URI}/', html)
    # inline style background-image: url(img/...)
    html = re.sub(r"url\(img/", f"url({IMG_URI}/", html)

    # -------- 7. Internal link replacements --------
    # index.html variants
    html = html.replace('href="index.html"',        f'href="{esc_url("/")}"')
    html = html.replace("href='index.html'",        f"href='{esc_url('/')}'")
    html = html.replace('href="index.htmlhttps://reink.stores.jp/reserve/omotesando/2481805"', f'href="{esc_url("/https://reink.stores.jp/reserve/omotesando/2481805")}"')
    html = html.replace('href="index.html#flow"',    f'href="{esc_url("/#flow")}"')
    html = html.replace('href="index.html#access"',  f'href="{esc_url("/#access")}"')

    # onclick with index.html
    html = html.replace(
        "location.href='index.htmlhttps://reink.stores.jp/reserve/omotesando/2481805'",
        f"location.href='{esc_url('/https://reink.stores.jp/reserve/omotesando/2481805')}'"
    )
    html = html.replace(
        "onclick=\"document.getElementById('contact').scrollIntoView({behavior:'smooth'})\"",
        f"onclick=\"location.href='{esc_url('/https://reink.stores.jp/reserve/omotesando/2481805')}'\""
    )

    # page.html and page.html#fragment
    for slug in SLUGS:
        # with fragment
        html = re.sub(
            rf'href="{slug}\.html#([^"]+)"',
            lambda m, s=slug: f'href="{esc_url(f"/{s}/#{m.group(1)}")}"',
            html
        )
        def _repl_sq(m, s=slug):
            path = '/' + s + '/#' + m.group(1)
            return "href='" + esc_url(path) + "'"
        html = re.sub(rf"href='{slug}\.html#([^']+)'", _repl_sq, html)
        # without fragment
        html = html.replace(f'href="{slug}.html"', f'href="{esc_url(f"/{slug}/")}"')
        html = html.replace(f"href='{slug}.html'", f"href='{esc_url(f'/{slug}/')}'")

    # -------- 8. Fix url() paths in extracted CSS --------
    if page_css:
        page_css = re.sub(r"url\('img/", f"url('{IMG_URI}/", page_css)
        page_css = re.sub(r'url\("img/', f'url("{IMG_URI}/', page_css)
        page_css = re.sub(r"url\(img/", f"url({IMG_URI}/", page_css)

    # -------- 9. Prepend get_header() + page-specific CSS --------
    css_block = ''
    if page_css:
        css_block = f'\n<style>\n{page_css}\n</style>\n\n'
    return "<?php get_header(); ?>" + css_block + html.lstrip('\n')


# -------- front-page.php --------
with open(os.path.join(BASE, 'index.html'), encoding='utf-8') as f:
    src = f.read()
out = convert(src, is_front=True)
with open(os.path.join(THEME, 'front-page.php'), 'w', encoding='utf-8') as f:
    f.write(out)
print('front-page.php OK')

# -------- page-{slug}.php --------
PAGE_MAP = {
    'access':  'access.html',
    'artists': 'artists.html',
    'gallery': 'gallery.html',
    'pricing': 'pricing.html',
    'qa':      'qa.html',
    'tattoo':  'tattoo.html',
}
for slug, filename in PAGE_MAP.items():
    src_path = os.path.join(BASE, filename)
    if not os.path.exists(src_path):
        print(f'SKIP (not found): {filename}')
        continue
    with open(src_path, encoding='utf-8') as f:
        src = f.read()
    out = convert(src)
    dst = os.path.join(THEME, f'page-{slug}.php')
    with open(dst, 'w', encoding='utf-8') as f:
        f.write(out)
    print(f'page-{slug}.php OK')

print('All done.')
