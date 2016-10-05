<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magic_language
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">



<?php wp_head(); ?>
<?php
echo '<script src="'.get_bloginfo("stylesheet_directory").'/build/js/owl.carousel.min.js">'."</script>";
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'magic_language' ); ?></a>

	<header id="masthead" class="site-header flex" role="banner">
		<div class="site-branding">
		<?php
			// echo 'img src="'.( get_stylesheet_directory() . '/images/top_nav_logo.png');
		 echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/top_nav_logo.png">'."<br>";
			// echo '<img src = "'.get_bloginfo("stylesheet_directory").'/images/top_nav_logo.png';
		?>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<?php else : ?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
			<?php
			endif;

			// $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex-end flex" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'magic_language' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="hero">
		<?php if ( is_front_page() ) : ?>
			<div class="hero-statement absolute text-center blue-text"><h1>The natural way to learn language</h1></div>
			<button class="hero-cta orange-button absolute">Register Today</button>
		<?php endif ?>
		<h1 class="blue-text large-3 large-centered"><?php get_custom_title(get_the_ID());?></h1>
	</div>
	<div id="content" class="site-content">
