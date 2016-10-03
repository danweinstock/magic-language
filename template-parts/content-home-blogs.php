
<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			
	<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_author()?>
		<?php the_time('F, Y')?>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt();
		?>
	</div><!-- .entry-content -->
	<div class="home-read-more blue-text">
		<a href="<?php the_permalink(); ?>">READ MORE </a><i class="fa fa-caret-right" aria-hidden="true"></i>	
	</div>
	
</article><!-- #post-## -->
