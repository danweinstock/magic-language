
<div id="owl-example" class="owl-carousel">

    <?php $teachers = new WP_Query( array( 'post_type' => 'Teachers','posts_per_page' => 20 ) ); ?>
    <?php while ( $teachers->have_posts() ) { ?>
            <?php $teachers->the_post(); ?>
            <div class="">
                <?php the_post_thumbnail(); ?>
                <div class="">
                    <h2><?php echo the_title(); ?></h2>
                    <p><?php echo the_content(); ?></p>
                </div>
            </div>
    <?php } wp_reset_query();?>
    
</div>
