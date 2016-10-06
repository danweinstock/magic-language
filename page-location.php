<?php
/**
 * Template Name: Location
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main clear padding-bot-big" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php echo the_content(); ?>
                    <div class="">


			<?php endwhile; wp_reset_query();?>

			<?php

				get_template_part( 'template-parts/content', 'location-neighbourhood' );

				get_template_part( 'template-parts/content', 'location-neighbourhood-info' );

				// If comments are open or we have at least one comment, load up the comment template.

			?>

            </div>


		</main><!-- #main -->


	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
