<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package magic_language
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title blue-text"><?php printf( esc_html__( 'Search Results for: %s', 'magic_language' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="large-8 column ">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</div>
			<div class="large-4 column home-sidebar-padding">
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
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
