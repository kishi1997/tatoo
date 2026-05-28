<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header" id="site-header">
        <nav class="nav container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="Re'ink">
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo esc_url( home_url( '/artists/' ) ); ?>"
                        <?php echo is_page( 'artists' ) ? ' class="active"' : ''; ?>>Artists</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
                        <?php echo is_page( 'about' ) ? ' class="active"' : ''; ?>>About</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#flow' ) ); ?>">Flow</a></li>
                <li><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>"
                        <?php echo is_page( 'gallery' ) ? ' class="active"' : ''; ?>>Gallery</a></li>
                <li><a href="<?php echo esc_url( home_url( '/access/' ) ); ?>"
                        <?php echo is_page( 'access' ) ? ' class="active"' : ''; ?>>Access</a></li>
                <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"
                        <?php echo is_page( 'faq' ) ? ' class="active"' : ''; ?>>FAQ</a></li>
            </ul>
            <div class="nav-btn-wrap">
                <button class="nav-btn nav-reserve"
                    onclick="location.href='<?php echo esc_url( home_url( '/#contact' ) ); ?>'"
                    aria-label="Reservation">
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
        <a href="<?php echo esc_url( home_url( '/artists/' ) ); ?>"
            <?php echo is_page( 'artists' ) ? ' class="active"' : ''; ?>>Artists</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
            <?php echo is_page( 'about' ) ? ' class="active"' : ''; ?>>About</a>
        <a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>"
            <?php echo is_page( 'gallery' ) ? ' class="active"' : ''; ?>>Gallery</a>
        <a href="<?php echo esc_url( home_url( '/access/' ) ); ?>"
            <?php echo is_page( 'access' ) ? ' class="active"' : ''; ?>>Access</a>
        <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"
            <?php echo is_page( 'faq' ) ? ' class="active"' : ''; ?>>FAQ</a>
        <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-outline">RESERVE</a>
    </nav>