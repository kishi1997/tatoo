(function () {
  const current = (location.pathname.split('/').pop() || 'index.html').toLowerCase();
  const isHome = current === 'index.html' || current === '';

  const links = [
    { key: 'artists', href: 'artists.html', label: 'Artists' },
    { key: 'tattoo', href: 'tattoo.html', label: 'Services' },
    { key: 'flow', href: isHome ? '#flow' : 'index.html#flow', label: 'Flow' },
    { key: 'gallery', href: 'gallery.html', label: 'Gallery' },
    { key: 'access', href: isHome ? '#access' : 'index.html#access', label: 'Access' },
    { key: 'qa', href: 'qa.html', label: 'FAQ' },
  ];

  const activeKey = current.includes('artists') ? 'artists'
    : current.includes('tattoo') ? 'tattoo'
      : current.includes('gallery') ? 'gallery'
        : current.includes('qa') ? 'qa'
          : current.includes('access') ? 'access'
            : '';

  const linkHtml = links.map(link => {
    const active = link.key === activeKey ? ' class="active"' : '';
    return `<li><a href="${link.href}"${active}>${link.label}</a></li>`;
  }).join('');

  const mobileLinkHtml = links.map(link => {
    const active = link.key === activeKey ? ' class="active"' : '';
    return `<a href="${link.href}"${active}>${link.label}</a>`;
  }).join('');

  const headerHtml = `
    <header class="site-header" id="site-header">
      <nav class="nav container">
        <a href="index.html" class="nav-logo">
          <img src="img/logo.png" alt="Re'ink">
        </a>
        <ul class="nav-links">${linkHtml}</ul>
        <div class="nav-btn-wrap">
          <button class="nav-btn nav-reserve" onclick="location.href='index.html#contact'" aria-label="Reservation">
            <span class="nav-reserve-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" focusable="false">
                <rect x="4" y="5" width="16" height="15" rx="1.6"></rect>
                <path d="M8 3v4M16 3v4M4 10h16M8 14h2M12 14h2M16 14h2M8 17h2M12 17h2"></path>
              </svg>
            </span>
            <span class="nav-reserve-text">RESERVE</span>
          </button>
        </div>
        <button class="nav-toggle" id="nav-toggle" aria-label="menu">
          <span></span><span></span><span></span>
        </button>
      </nav>
    </header>
    <nav class="mobile-nav" id="mobile-nav">
      ${mobileLinkHtml}
      <a href="index.html#contact" class="btn btn-outline" style="margin-top:28px;letter-spacing:0.2em;font-size:11px;">RESERVE</a>
    </nav>
  `;

  const footerHtml = `
    <footer class="footer" id="footer-access">
      <div class="container">
        <div class="footer-inner">
          <div class="footer-brand">
            <a href="index.html"><img src="img/logo.png" alt="Re'ink"></a>
            <p class="footer-addr">〒107-0062<br>東京都港区南青山6-2-10 TIビル 2F<br><br>表参道徒歩7分<br>11:00 – 20:00（不定休）</p>
          </div>
          <div>
            <p class="footer-col-title">Menu</p>
            <ul class="footer-links">
              <li><a href="artists.html">アーティスト</a></li>
              <li><a href="tattoo.html">タトゥーについて</a></li>
              <li><a href="gallery.html">作品ギャラリー</a></li>
              <li><a href="index.html#flow">ご予約の流れ</a></li>
              <li><a href="index.html#access">アクセス</a></li>
              <li><a href="qa.html">FAQ</a></li>
            </ul>
          </div>
          <div>
            <p class="footer-col-title">Legal</p>
            <ul class="footer-links">
              <li><a href="#">プライバシーポリシー</a></li>
              <li><a href="#">利用規約</a></li>
              <li><a href="#">特定商取引法</a></li>
            </ul>
          </div>
          <div>
            <p class="footer-col-title">Follow</p>
            <ul class="footer-links">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">LINE公式アカウント</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-notes">
          <ul class="footer-notes-list">
            <li>18歳未満の方はお断りしております。</li>
            <li>暴力団、暴力団関係者、及びそうみなされる方はお断りしております。</li>
            <li>持病、感染症などをお持ちの方は、必ず事前に申告してください。</li>
            <li>飲酒後の方、薬の服用をされている方は、仕上がりが悪くなることがありますのでお断りしております。</li>
            <li>公序良俗の範囲内での行動ができない方はお断りしております。</li>
          </ul>
        </div>
        <div class="footer-bottom">
          <p class="footer-copy">© 2026 Re'ink. All rights reserved.</p>
          <div class="footer-legal"><a href="#">Privacy</a><a href="#">Terms</a></div>
        </div>
      </div>
    </footer>
  `;

  const style = document.createElement('style');
  style.textContent = `
    .nav-btn-wrap {
      display: flex;
      align-items: center;
    }
    .nav-btn.nav-reserve {
      width: 104px;
      height: 104px;
      padding: 0;
      border: 1px solid rgba(26, 26, 26, 0.16);
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.94);
      color: var(--color-text);
      box-shadow: 0 14px 34px rgba(0, 0, 0, 0.1);
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 8px;
      font-family: var(--font-en);
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.22em;
      line-height: 1;
      text-transform: uppercase;
      transition:
        transform 0.35s ease,
        background 0.35s ease,
        border-color 0.35s ease,
        box-shadow 0.35s ease;
    }
    .nav-btn.nav-reserve:hover {
      transform: translateY(-2px);
      background: #fff;
      border-color: rgba(26, 26, 26, 0.32);
      box-shadow: 0 18px 44px rgba(0, 0, 0, 0.16);
    }
    .nav-reserve-icon {
      width: 25px;
      height: 25px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .nav-reserve-icon svg {
      width: 100%;
      height: 100%;
      fill: none;
      stroke: currentColor;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }
    .nav-reserve-text {
      padding-left: 0.22em;
    }
    .footer-inner {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 48px;
      margin-bottom: 56px;
    }
    .footer-brand img {
      height: 44px;
      width: auto;
      object-fit: contain;
      margin-bottom: 24px;
    }
    .footer-addr {
      font-size: 12px;
      color: var(--color-sub);
      line-height: 2;
      letter-spacing: 0.04em;
    }
    .footer-col-title {
      font-family: var(--font-en);
      font-size: 11px;
      letter-spacing: 0.2em;
      color: var(--color-accent);
      text-transform: uppercase;
      margin-bottom: 20px;
      font-weight: 300;
    }
    .footer-links li {
      margin-bottom: 10px;
    }
    .footer-links a {
      font-size: 12px;
      color: var(--color-sub);
      letter-spacing: 0.06em;
      font-weight: 300;
    }
    .footer-notes {
      border-top: 1px solid var(--color-border);
      padding: 28px 0;
    }
    .footer-notes-list {
      display: grid;
      gap: 8px;
      max-width: 920px;
    }
    .footer-notes-list li {
      font-size: 13px;
      color: var(--color-sub);
      letter-spacing: 0.05em;
      line-height: 1.8;
    }
    @media (max-width: 1024px) {
      .nav-btn.nav-reserve {
        width: 88px;
        height: 88px;
        gap: 7px;
        font-size: 10px;
      }
      .nav-reserve-icon {
        width: 22px;
        height: 22px;
      }
      .footer-inner {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
      }
    }
    @media (max-width: 768px) {
      .nav-btn-wrap {
        display: none;
      }
      .footer-inner {
        grid-template-columns: 1fr;
        gap: 32px;
      }
      .footer-bottom {
        flex-direction: column;
        gap: 12px;
        text-align: center;
      }
    }
  `;
  document.head.appendChild(style);

  function replaceParts() {
    const header = document.querySelector('.site-header');
    const mobileNav = document.querySelector('.mobile-nav');
    if (header) {
      header.insertAdjacentHTML('beforebegin', headerHtml);
      header.remove();
      if (mobileNav) mobileNav.remove();
    }

    const footer = document.querySelector('footer.footer');
    if (footer) {
      footer.insertAdjacentHTML('beforebegin', footerHtml);
      footer.remove();
    }
  }

  replaceParts();
}());
