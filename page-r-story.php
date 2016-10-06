<?php
/**
 * Template Name: Our Story
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="">
					<?php echo the_content(); ?>
				</div>
			<div class="bea right"></div>

				<div class="title-teacher">Meet our Teachers</div>
			<?php endwhile; wp_reset_query();?>
                <?php

    				get_template_part( 'template-parts/content', 'about-teachers' );

    				// If comments are open or we have at least one comment, load up the comment template.

    			?>
			<?php while ( have_posts() ) : the_post(); ?>

            </div>


			<?php endwhile; wp_reset_query();?>
		</main><!-- #main -->



	</div><!-- #primary -->
	
<?php
//get_sidebar();
get_footer();
