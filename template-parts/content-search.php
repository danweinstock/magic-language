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
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="single-blog-author ">
			Written By: <?php the_author(); ?>
		</div>
		<div class="entry-meta">
			<?php magic_language_posted_on(); ?>
		</div>

		<?php the_post_thumbnail( 'medium' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php magic_language_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
