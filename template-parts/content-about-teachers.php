
<div id="owl-example" class="owl-carousel">

    <?php $teachers = new WP_Query( array( 'post_type' => 'Teachers','posts_per_page' => 20 ) ); ?>
    <?php while ( $teachers->have_posts() ) { ?>
            <?php $teachers->the_post(); ?>
            <div class="row teachers">
                <div class="large-5 columns pad-left">
                    <div class="rounded-corners"><?php the_post_thumbnail(); ?></div>
                </div>
                <div class="large-7 columns padding-right-teacher-profile">
                    <h2 class="title-teacher-name"><?php echo the_title(); ?></h2>
                    <h4 class="blue"><?php echo CFS()->get('language');?></h4>
                    <p><?php echo the_content(); ?></p>
                </div>
            </div>
    <?php } wp_reset_query();?>

</div>
