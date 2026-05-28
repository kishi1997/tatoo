<?php
$args = wp_parse_args(
    $args ?? [],
    [
        'label'     => 'Contact',
        'title'     => 'Reservation',
        'subtitle'  => 'ご予約・ご相談',
        'lead'      => 'まずはお気軽にご相談ください。',
        'reserve'   => 'https://reink.stores.jp/reserve/omotesando/2481805',
        'line'      => 'https://lin.ee/8Btanj22',
    ]
);
?>

<section class="cta-strip">
    <div class="container">
        <span class="cta-label fi"><?php echo esc_html( $args['label'] ); ?></span>
        <h2 class="cta-title fi fi-d1"><?php echo esc_html( $args['title'] ); ?></h2>
        <span class="cta-title-ja fi fi-d2"><?php echo esc_html( $args['subtitle'] ); ?></span>
        <p class="cta-lead fi fi-d2"><?php echo esc_html( $args['lead'] ); ?></p>
        <div class="cta-actions fi fi-d3">
            <a href="<?php echo esc_url( $args['reserve'] ); ?>" class="btn btn-outline" target="_blank" rel="noopener noreferrer">Webで予約する</a>
            <a href="<?php echo esc_url( $args['line'] ); ?>" class="btn btn-ghost" target="_blank"
                rel="noopener noreferrer">LINEで相談する</a>
        </div>
    </div>
</section>
