
<?php $neighbourhood = new WP_Query( array( 'post_type' => 'Neighbourhood','posts_per_page' => 20 ) ); ?>


    <?php while ( $neighbourhood->have_posts()){ ?>
        <?php $neighbourhood->the_post(); ?>

            <div class="large-4 columns location-part center" data-map="<?php the_ID()?>">
                <button class="location-button relative">
                    <?php the_post_thumbnail()?>
                    <p class="location_box_title absolute"><?php echo the_title(); ?></p>
                </button>
            </div>

    <?php } ?>
<div class='clearfix'></div>
