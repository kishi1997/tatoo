<?php
$args = wp_parse_args(
    $args ?? [],
    [
        'slug' => get_post_field( 'post_name', get_queried_object_id() ),
    ]
);

$current_slug = $args['slug'] ?: get_post_field( 'post_name', get_queried_object_id() );
?>

<div class="page-breadcrumb">
    <div class="container">
        <div class="page-hero-breadcrumb fi fi-d1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span>/</span>
            <span><?php echo esc_html( $current_slug ); ?></span>
        </div>
    </div>
</div>
