<?php $neighbourhood = new WP_Query( array( 'post_type' => 'Neighbourhood','posts_per_page' => 20 ) ); ?>
<?php while ( $neighbourhood->have_posts()){ ?>
    <?php $neighbourhood->the_post(); ?>
    <div class="hidden address-part padding-top-med" id="map-info-<?php the_ID()?>">
        <div class="row">
            <div class="title-location-info">Location Information</div>
            <div class="large-6 columns">
                <h2 class="padding-left blue"><?php echo the_title(); ?></h2>
                <div class="large-7 columns padding-left padding-top">
                    <?php  echo '<img src="'.CFS()->get('logo_image').'">'; ?>
                </div>
                <div class="large-5 columns">
                    <?php echo CFS()->get('building_name'); ?>
                    <div class="padding-top">
                        <?php echo CFS()->get('address'); ?>
                    </div>
                    <div class="padding-top-lrg">
                        <a href="https://www.google.ca"> <button class="class-button">Class Schedule</button> </a>
                    </div>
                </div>
            </div>
            <div class="large-6 columns">
                <?php echo CFS()->get('google_map'); ?>
            </div>
        </div>
    </div>
<?php } wp_reset_query();?>
