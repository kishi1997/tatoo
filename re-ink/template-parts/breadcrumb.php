<?php
$args = wp_parse_args(
    $args ?? [],
    [
        'current' => get_the_title(),
    ]
);
?>

<div class="page-breadcrumb">
    <div class="container">
        <div class="page-hero-breadcrumb fi fi-d1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span>/</span>
            <span><?php echo esc_html( $args['current'] ); ?></span>
        </div>
    </div>
</div>
