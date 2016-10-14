<?php
/**
 * The Blog template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magic_language
 */

get_header(); ?> 

	<div id="primary" class="content-area large-7 columns">
		<main id="main" class="site-main" role="main">
			<div class="large-4 small-12 show-for-small-only column home-sidebar-padding ">
				<div class="search-spacing">
					<form role="search" class="resource-form" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
						<input type="text" name="s" placeholder="Search "/>
						<input type="hidden" name="post_type" value="resources" /> <!-- // hidden 'products' value -->
						<input type="submit" alt="Search" value="" />
					</form>
				</div>
			</div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				?>
				<?php
				get_template_part( 'template-parts/content', 'archive-blog' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="large-4 small-12 hide-for-small-only column home-sidebar-padding ">
		<div class="search-spacing">
			<form role="search" class="resource-form" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
				<input type="text" name="s" placeholder="Search "/>
				<input type="hidden" name="post_type" value="resources" /> <!-- // hidden 'products' value -->
				<input type="submit" alt="Search" value="" />
			</form>
		</div>
		<div>
			<?php
			dynamic_sidebar( 'sidebar-3'); ?>
		</div>
	</div>
<?php
get_footer();
