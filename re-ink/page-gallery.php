<?php get_header(); ?>

  <section class="page-hero">
    <div class="container">
      <div class="page-hero-inner">
        <div class="fi">
          <span class="page-hero-en">gallery</span>
          <h1 class="page-hero-title">Works</h1>
          <span class="page-hero-ja">【 作品 】</span>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'template-parts/breadcrumb', null, [ 'current' => 'Gallery' ] ); ?>

  <!-- WORKS -->
  <section class="gallery-sec">
    <div class="container">
      <div class="gallery-grid" id="gallery-grid">

        <?php
        $works_query = new WP_Query( [
            'post_type'      => 'gallery_work',
            'posts_per_page' => 12,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );

        if ( $works_query->have_posts() ) :
            $idx = 1;
            while ( $works_query->have_posts() ) : $works_query->the_post();
                reink_render_work_card( get_the_ID(), $idx );
                $idx++;
            endwhile;
            wp_reset_postdata();
        else :
        ?>
        <p style="color:var(--color-sub);padding:40px;grid-column:1/-1;">作品がまだ登録されていません。</p>
        <?php endif; ?>

      </div>
      <div class="gallery-load-more fi">
        <button
          class="btn btn-ghost"
          id="load-more"
          data-current-page="1"
          data-max-pages="<?php echo esc_attr( $works_query->max_num_pages ); ?>"
          <?php echo $works_query->max_num_pages <= 1 ? 'hidden' : ''; ?>
        >Load More Works</button>
      </div>
    </div>
  </section>

  <!-- LIGHTBOX -->
  <div class="lightbox" id="lightbox">
    <button class="lightbox-close" id="lightbox-close">✕</button>
    <img class="lightbox-img" id="lightbox-img" src="" alt="">
  </div>

  <?php get_template_part( 'template-parts/cta-strip' ); ?>

<?php get_footer(); ?>
