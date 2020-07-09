<?php get_header();?>

<section class="page-wrap">

    <div class="container">
    <h1><?php the_title();?></h1>
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('blog-large');?>"  class="img-fluid mb-3 img-thumbnail">
            <?php endif;?>


        <div class="row">
               <div class="col-lg-6">
                        <?php get_template_part('includes/section','cars');?>
                        <?php wp_link_pages();?>
               </div>

               <div class="col-lg-6">
               <?php get_template_part('includes/form','enquiry');?>
                        <ul>
                            <li>
                            Color :  <?php the_field('color');?>
                            </li>

                    
                            <li>
                            Registration : <?php the_field('registration');?>
                            </li>
                          

                        </ul>
               
               </div>
        </div>
          

            
    
           
    
    </div>

</section>



<!-- for getting data without plugins -->
<!-- 
<li>
                            Color :  <?php echo get_post_meta($post->ID ,'color' ,true);?>
                            </li>

                            <?php if( get_post_meta($post->ID ,'registration' ,true)):?>
                            <li>
                            Registration :  <?php echo get_post_meta($post->ID ,'registration' ,true);?>
                            </li>
                            <?php endif ?> -->

<?php get_footer();?>