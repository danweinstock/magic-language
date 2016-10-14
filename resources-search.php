<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package magic_language
 */

get_header();



?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

            <header class="page-header">
				<div class="large-9 small-7 columns padding-1">
	                <!-- display the user name logged in -->
	                <?php $current_user = wp_get_current_user();?>
	                <h1 class="name-title name-title-mobile"><?php echo 'Hi ' . $current_user->user_firstname . '!'; ?></h1>
	                <!-- display a logout button -->
	                <a class="logout_button logout_button-mobile" href="<?php echo wp_logout_url(); ?>">Logout</a>
				</div>
				<div class="large-3 small-5 columns padding-2 padding-2-mobile">
	                <!-- display a search field - wordpress plugin to search for custom postypes -->
	                <?php echo '<a href="'.get_bloginfo().'/resources">Return to Resources</a>'?>
				</div>
				<div class="large-12 small-12">
	    			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'magic_language' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
			</header><!-- .page-header -->

			<?php

				get_template_part( 'template-parts/content', 'resources' );



			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
