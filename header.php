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
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="company-logo"
					src="<?php echo get_template_directory_uri();?>/images/logo_blue.jpg"/>
				</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex-end flex company-nav" role="navigation">


			<button class="menu-toggle orange-button" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'magic_language' ); ?></button>


			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

		<div class="hero">
			<?php if ( is_front_page() ) { ?>
				<div class="hero-statement txt-center large-6 columns right blue-text"><div class="hero-text"> The natural way to <br> learn language</div>
					<button class="hero-cta orange-button">Register Today</button>
				</div>

			<?php } else if(is_archive() && !is_category()) { ?>
				<div class="title-styling">Search Results</div>
				<?php
			}else if(is_category() || is_search()) { ?>
				<div class="title-styling">Blog</div>
				<?php
			}
			else { ?>
				<div class="title-styling"><?php get_custom_title(get_the_ID());?></div>
			<?php } ?>
		</div>
	<div id="content" class="site-content row">
