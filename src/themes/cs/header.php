<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header__top">
			<div class="container-xl">
				<div class="site-header__wrapper">
					<a href="/">
						<picture>
							<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/header-logo-mobile.svg'?>">
							<img src="<?php echo get_template_directory_uri() . '/assets/public/images/header-logo-desktop.svg'?>" alt="Image description">
						</picture>
					</a>
					<ul class="site-header__links">
						<li>
							<a href="#" class="site-header__single-link f-700">Bet Now</a>
						</li>
						<li>
							<a href="#" class="btn-primary">Join</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="site-header__bottom">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/hero-banner-mobile.png'?>">
				<img class="site-header__banner" src="<?php echo get_template_directory_uri() . '/assets/public/images/hero-banner-desktop.jpg'?>" alt="Image description" width="1440" height="386">
			</picture>
		</div>
		<nav class="site-header__nav">
			<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'site-nav'
					)
				);
			?>
		</nav>
	</header>
