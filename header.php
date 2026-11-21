<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header glass">
	<div class="container nav-container">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="logo-square">
					<span class="logo-digi">DIGI</span><span class="logo-gyapan">GYAPAN</span>
				</div>
			</a>
		</div>

		<nav class="nav-menu">
			<?php
			if ( has_nav_menu( 'menu-header' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-header',
						'menu_class'     => 'header-nav-list',
						'container'      => false,
					)
				);
			} else {
				digi_header_menu_fallback();
			}
			?>
		</nav>

		<div class="nav-toggle">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</header>
