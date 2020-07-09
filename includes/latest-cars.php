<?php

    $attributes=get_query_var('attributes');

//  print_r($attributes[color]);
    $args = [
        'post_type' =>'cars',
        'meta_key' => 'color',
        'meta_value' => $attributes['color'],
        'posts_per_page' => 1,

    ];

    $query = new WP_Query($args);
?>


<?php if( $query->have_posts() ):?>

        <?php while($query->have_posts()) : $query->the_post();?>

    <div class="card mb-3">

            <div class="card-body ">

            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('blog-large');?>"  class="img-fluid mb-3 img-thumbnail">
            <?php endif;?>
            <h3><?php the_title();?></h3>

            <?php the_field('registration');?>
            </div>
    </div>        

        <?php endwhile;?>

<?php endif;?>