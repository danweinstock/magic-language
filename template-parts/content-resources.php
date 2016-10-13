<?php

$current_user = wp_get_current_user();

if($current_user->roles[0]=='Teacher'||$current_user->roles[0]=='administrator'){
    $resources = new WP_Query( array( 'post_type' => 'Resources','posts_per_page' => 20 ) );
} else if ($current_user->roles[0]=='Parent') {
    $resources = new WP_Query( array( 'post_type' => 'Resources','posts_per_page' => 20,
    'meta_query'	=> array(
		'relation'		=> 'AND',
		array(
			'key'	 	=> 'permission',
			'value'	  	=> array('Public', 'Parent'),
			'compare' 	=> 'IN',
		))));
} else {
    $resources = new WP_Query( array( 'post_type' => 'Resources','posts_per_page' => 20, 'meta_key' => 'permission', 'meta_value'	=> 'Public' ) );

}




?>
<?php while ( $resources->have_posts() ) { ?>

        <?php $resources->the_post();



        ?>
        <div class="row resources-padding resource-border-mobile">
            <div class="large-12 column resources-border resources-border-mobile">
                <h2 class="resource-title"><?php echo the_title(); ?></h2>
                <p class="date-title">Posted <?php echo the_time('d M  Y'); ?></p>
                <p class="dark-souls"><?php echo the_content(); ?></p>
                <?php $fields = CFS()->get('resources');
                if (empty($field)) {
                    foreach ( $fields as $field ) { ?>
                        <a target="_blank" href="<?php echo ($field['pdf']); ?>">
                        <?php echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/pdf.png">';?> </a>
                    <?php }
                }
                ?>

            </div>
        </div>
<?php } wp_reset_query();?>
