<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magic_language
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="large-6 column">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<div class="single-blog-author ">
				Written by: <?php the_author(); ?>
			</div>
			<div class="entry-meta">
				<?php magic_language_posted_on(); ?>
			</div>

			<div class="image-border-search"> <?php the_post_thumbnail( 'front-blog' ); ?>
			</div>
		</div>

	</header><!-- .entry-header -->
		<div class="large-6 column">
			<div class="entry-summary search-exerpt-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<a href="#"> Read more</a>
		</div>
</article><!-- #post-## -->
