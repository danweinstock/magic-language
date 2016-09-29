
<?php $args = new WP_Query( array( 'post_type' => 'teachers','posts_per_page' => '3' ) ); ?>
<?php while ( new WP_Query( $args ) ) {  ?>
    <div class="">
        <h1>I am Dark Souls</h1>
        <?php the_post_thumbnail(); ?>
        <div class="">
            <?php echo the_title(); ?>
            <p><?php echo the_content(); ?></p>
        </div>
    </div>

<?php } wp_reset_query();?>
