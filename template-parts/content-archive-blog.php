<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magic_language
 */
?>
<article class="large-5 columns" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'front-blog' ); ?>
	<?php endif; ?>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php magic_language_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'magic_language' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'magic_language' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php magic_language_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->