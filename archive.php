<?php
/**
 * The template for displaying the archive page for categories
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magic_language
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title blue-text padding-left-1">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive-blog' );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
			<div class="large-4 column">
				<form role="search" class="resource-form" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
					<input type="text" name="s" placeholder="Search "/>
					<input type="hidden" name="post_type" value="resources" /> <!-- // hidden 'products' value -->
					<input type="submit" alt="Search" value="" />
				</form>
				<?php
				dynamic_sidebar( 'sidebar-3'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
