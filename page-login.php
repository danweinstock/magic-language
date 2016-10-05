<?php
/**
 * The template for displaying login page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magic_language
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			get_template_part( 'template-parts/content', 'page-login' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();
