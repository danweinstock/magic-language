<div class="front-blog">
	
<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'front-blog' ); ?>
			
	<?php endif; ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="home-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<?php the_time('F, Y')?>
		<?php the_author()?>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt();
		?>
	</div><!-- .entry-content -->
	<div class="home-read-more blue-text">
		<a href="<?php the_permalink(); ?>">Read More </a><i class="fa fa-caret-right" aria-hidden="true"></i>	
	</div>
	
</article><!-- #post-## -->
