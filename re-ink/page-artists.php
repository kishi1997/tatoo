<?php get_header(); ?>

  <!-- HEADER -->
  <!-- MOBILE NAV -->
  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-inner">
        <div class="page-hero-text fi">
          <span class="page-hero-en">artists</span>
          <h1 class="page-hero-title">Our Artists</h1>
          <span class="page-hero-ja">【 アーティスト紹介 】</span>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'template-parts/breadcrumb', null, [ 'current' => 'Artists' ] ); ?>

  <!-- ARTISTS GRID -->
  <section class="artists-sec">
    <div class="container">
      <div class="sec-head center fi">
        <span class="sec-en">artists</span>
        <h2 class="sec-title">【 アーティスト 】</h2>
        <div class="sec-line"></div>
      </div>
      <div class="artists-grid">

        <?php
        $artists_query = new WP_Query( [
            'post_type'      => 'artist',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ] );

        if ( $artists_query->have_posts() ) :
            $idx = 1;
            while ( $artists_query->have_posts() ) : $artists_query->the_post();
                $specialty = get_post_meta( get_the_ID(), '_artist_name_ja', true );
                $instagram = get_post_meta( get_the_ID(), '_artist_instagram', true );
                $fi_d      = 'fi-d' . ( ( ( $idx - 1 ) % 3 ) + 1 );
                $ig_handle = $instagram ? ltrim( $instagram, '@' ) : '';
        ?>
        <div class="artist-card fi <?php echo esc_attr( $fi_d ); ?>">
          <div class="artist-img-wrap">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large', [ 'alt' => esc_attr( get_the_title() ) ] ); ?>
            <?php endif; ?>
          </div>
          <div class="artist-body">
            <p class="artist-name-en"><?php the_title(); ?></p>
            <?php if ( $specialty ) : ?>
            <p class="artist-specialty"><?php echo esc_html( $specialty ); ?></p>
            <?php endif; ?>
            <?php if ( has_excerpt() ) : ?>
            <p class="artist-bio"><?php echo esc_html( get_the_excerpt() ); ?></p>
            <?php endif; ?>
            <?php if ( $ig_handle ) : ?>
            <a href="https://www.instagram.com/<?php echo esc_attr( $ig_handle ); ?>/" class="artist-ig" target="_blank" rel="noopener noreferrer">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
              <?php echo esc_html( $instagram ); ?>
            </a>
            <?php endif; ?>
          </div>
        </div>
        <?php
                $idx++;
            endwhile;
            wp_reset_postdata();
        else :
        ?>
        <p style="color:var(--color-sub);padding:40px;">アーティスト情報がまだ登録されていません。</p>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta-strip' ); ?>

  <!-- FOOTER -->

<?php get_footer(); ?>
