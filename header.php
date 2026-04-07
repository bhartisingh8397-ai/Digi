<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'minimal-corporate' ); ?>>
<?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav id="main-nav">
        <div class="container nav-content">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-wrap">
                    <div class="logo-main"><span class="box">DIGI</span><span class="text">GYAPAN</span></div>
                </a>
            </div>
            <div class="nav-links">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => 'digi_fallback_menu',
                    )
                );
                ?>
            </div>
            <div class="nav-cta">
                <a href="#contact" class="btn btn-primary">Sign up</a>
            </div>
        </div>
    </nav>
