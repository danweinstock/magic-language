
<?php $neighbourhood = new WP_Query( array( 'post_type' => 'Neighbourhood','posts_per_page' => 20 ) ); ?>

<?php while ( $neighbourhood->have_posts()){ ?>
    <?php $neighbourhood->the_post(); ?>
    <div class="location-part" data-map="<?php the_ID()?>">
        <button><?php the_post_thumbnail()?></button>
    </div>
<?php } ?>
    <script>

    </script>
