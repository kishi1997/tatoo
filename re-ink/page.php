<?php get_header(); ?>
<main>
  <div class="container" style="padding-top:calc(var(--nav-h) + 80px);padding-bottom:80px;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
