<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magic_language
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header padding-left-2">

	<?php
	if ( is_single() ) :
		the_title( '<h1 class="entry-title blue-text">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;
	if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta ">
		<div class="single-blog-author ">
			Written By: <?php the_author(); ?>
		</div>
		<div class="single-blog-date ">
			Posted: <?php the_time('F, Y')?>

		</div>
		<div class="single-post-categy ">
			<?php the_category() ?>
		</div>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content padding-left-2">
		<?php
			the_content( sprintf(
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
</article><!-- #post-## -->