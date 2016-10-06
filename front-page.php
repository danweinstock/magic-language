<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
				
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
				
			
<!-- get_template_part, get_header and get_footer similiar to include statement -->
				<?php get_template_part('template-parts/content','home-logo-section');?>
				<?php get_template_part( 'template-parts/content','home-story' ); ?>
				<h1 class="blue-text">Recent Blogs</h1>


	<div class="recent-blogs row">
		<?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="large-4 columns">
	<?php get_template_part( 'template-parts/content','home-blogs' ); ?>
			
		</div>

<?php endwhile;?>
	</div>


<?php else : ?>

	<h1>Not Found</h1>

<?php endif; wp_reset_query(); ?>
				
		</main><!-- #main -->
	</div><!-- #primary -->




<?php get_footer(); ?>
