<?php 
/*
   Template Name: Portfolio Page
*/
get_header(); ?>
<?php get_template_part('inc/breadcumb'); ?>

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="portfolio-menu mb-40 text-center">
                     <button class="active" data-filter="*">ALL</button>
                     <?php 
                        $cats = get_terms('portfolio-cat');
                        foreach( $cats as $cat){
                     ?>
                     <button data-filter=".<?php echo $cat->slug ;?>" class=""><?php echo $cat->name ; ?> </button>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <div class="row grid no-gutters">
               <?php
                  $portfo = new WP_Query(array(
                     'post_type' => 'portfolios',
                     'order'     => 'ASC',
                  ));

                  while($portfo->have_posts()) : $portfo->the_post();
               ?>
               <div class="col-md-4 grid-item 
                  <?php
                     $terms = get_the_terms( get_the_ID(), 'portfolio-cat' );
                     foreach( $terms as $term){
                     echo $term->slug.' ';
                     }
                  ?>
               ">
                  <div class="single-portfolio">
                     <img src="<?php the_post_thumbnail_url();?>" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php the_permalink();?>" class=""><i class="fa fa-link"></i> <?php the_title();?> <span><?php the_field('designation',); ?></span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?>
            </div>
         </div>
      </section>
      <!-- projectss Area End -->
 <?php get_footer(); ?>