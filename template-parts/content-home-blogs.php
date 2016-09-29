
<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			
	<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt();
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
