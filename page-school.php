<?php
/**
 * Template Name: Page School
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			get_template_part( 'template-parts/content', 'page-school' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();