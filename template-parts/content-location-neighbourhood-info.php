<?php $neighbourhood = new WP_Query( array( 'post_type' => 'Neighbourhood','posts_per_page' => 20 ) ); ?>
<?php while ( $neighbourhood->have_posts()){ ?>
    <?php $neighbourhood->the_post(); ?>
    <div class="hidden address-part" id="map-info-<?php the_ID()?>">
        <h2><?php echo the_title(); ?></h2>
        <?php  echo '<img src="'.CFS()->get('logo_image').'">'; ?>
        <div class="">
            <?php echo CFS()->get('Neighbourhood','Address'); ?>
            <?php echo CFS()->get('building_name'); ?>
            <?php echo CFS()->get('address'); ?>
            <a href="https://www.google.ca"> <button class="">Class Schedule</button> </a>
            <?php echo CFS()->get('google_map'); ?>
        </div>
    </div>
<?php } wp_reset_query();?>
