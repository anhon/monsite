<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<div class="header">
			
			<nav id="site-navigation" class="main-navigation" role="navigation">

				<button class="menu-toggle menu-toggle-effect" aria-controls="primary-menu" aria-expanded="false">
		          <span><?php esc_html_e( 'Primary Menu', 'avnt' ); ?></span>
		        </button>

				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'avnt' ); ?></button> -->
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>

		</div>

	</header>

	<div id="content" class="site-content">
