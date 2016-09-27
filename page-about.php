<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magic_language
 */

//get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <h1>Our Story</h1>
            <div class="">
                <p>Magic Languages started in response to the growing need to learn and master foreign languages in today’s increasingly globalized world. We offer programs in Spanish, French and Mandarin aimed at children and babies designed to enhance their communications capabilities in practical ways.</p>
                <p>We believe that it is essential to take advantage of early developmental phases to give children the benefit of learning a new language in a fun and natural manner.</p>
            </div>
            <div class="">
                <div class="">
                    <h1>Beatriz</h1>
                    <h4>Founder</h4>
                    <p>This is space to tell Bea’s story....Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                    <p>Vestibulum sed metus in lorem tristique ullamcorper id vitae erat. Nulla mollis sapien sollicitudin lacinia lacinia. Vivamus facilisis dolor et massa placerat, at vestibulum nisl egestas. Nullam rhoncus lacus non odio luctus, eu condimentum mauris ultrices. Praesent blandit, augue a posuere aliquam,</p>
                    <p>arcu tortor feugiat turpis, quis lacinia augue sapien at tellus. Cras ut erat magna. Morbi nibh ante, condimentum vestibulum tempus a, tristique et velit. Sed semper aliquet ante. Quisque tempus arcu sapien, id convallis turpis dictum quis. Nunc commodo vitae risus sit amet sollicitudin. Sed id facilisis sem.</p>
                </div>
                <div class="">
                </div>
            </div>
            <div class="">
                <h1>Meet our Teachers</h1>

                <?php
    			while ( have_posts() ) : the_post();

    				get_template_part( 'template-parts/content', 'page' );

    				// If comments are open or we have at least one comment, load up the comment template.
    				if ( comments_open() || get_comments_number() ) :
    					comments_template();
    				endif;

    			endwhile; // End of the loop.
    			?>

            </div>
            <div class="">
                <h4>Start your child on the journey to a new language today.</h4>
                <a href="https://www.google.ca"> <button class="">Programs</button> </a>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();
