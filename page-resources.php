<?php
/**
 * Template Name: Resources
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<!-- check user -->
				<div class="">
					<div class="large-9 small-7 columns padding-1">
						<?php
							if ( is_user_logged_in() ){
							 $current_user = wp_get_current_user();?>
							<h1 class="name-title name-title-mobile"><?php echo 'Hi ' . $current_user->user_firstname . '!';?></h1>
							<a class="logout_button logout_button-mobile" href="<?php echo wp_logout_url(); ?>">Logout</a>
						<?php } else { ?>
							<h1 class="name-title name-title-mobile">Hi Guest!</h1>

						<?php } ?>

						<!-- display a logout button -->

					</div>
					<!-- display a search field - wordpress plugin to search for custom postypes -->
					<div class="large-3 small-5 columns padding-2 padding-2-mobile">
					    <form role="search" class="resource-form" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
					    <input type="text" name="s" placeholder="Search "/>
					    <input type="hidden" name="post_type" value="resources" /> <!-- // hidden 'products' value -->
					    <input type="submit" alt="Search" value="" />
					  	</form>
					 </div>
				</div>
			<div class="bea right"></div>


			<?php endwhile; wp_reset_query();?>
                <?php


    				get_template_part( 'template-parts/content', 'resources' );

    				// If comments are open or we have at least one comment, load up the comment template.

    			?>

            </div>

			<?php// } ?>


		</main><!-- #main -->



	</div><!-- #primary -->

<?php

//get_sidebar();
get_footer();
