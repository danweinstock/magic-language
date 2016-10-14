<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package magic_language
 */

get_header(); ?>
<div class="row">
		<div id="primary" class="content-area large-7 column">
			<main id="main" class="site-main" role="main">


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'blog-single' );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="large-4 small-4  show-for-large-only column">
			<div class="search-spacing">
				<form role="search" class="resource-form" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
					<input type="text" name="s" placeholder="Search "/>
					<input type="hidden" name="post_type" value="resources" /> <!-- // hidden 'products' value -->
					<input type="submit" alt="Search" value="" />
				</form>
			</div>
			<?php
			dynamic_sidebar( 'sidebar-2'); ?>
			
		</div>
	
</div>

<?php
get_footer();
