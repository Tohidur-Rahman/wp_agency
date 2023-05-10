<?php 
/*
   Template Name: Gallery Page
*/
get_header(); ?>
<?php get_template_part('inc/breadcumb'); ?>

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php 
                $args = new WP_Query(array(
                    'post_type' => 'gallery',
                 ));

                 while($args->have_posts()) : $args->the_post();
            ?>

            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo esc_url( the_post_thumbnail_url());?>" alt="<?php esc_attr(the_title());?>">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3>
                            <?php if(class_exists('ACF')){ ?>
                            <a href="<?php the_field('gallery_zoom_image');?>" class="gallery">
                            
                           <i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                endwhile; 
                wp_reset_postdata();
            ?>
          
        </div>
    </div>
</section>
<?php get_footer(); ?>