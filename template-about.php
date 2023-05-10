<?php 
/*
   Template Name: About Page
*/
get_header(); ?>
<?php get_template_part('inc/breadcumb'); ?>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="about">

                  <?php
                     if(class_exists('ACF')){
                        $about_content = get_field('about_content', 'option');
                  ?>
                     <div class="page-title">
                        <h4><?php echo $about_content['title']; ?></h4>
                     </div>
                     <p><?php echo $about_content['description']; ?> </p>
                     
                  </div>
               </div>
               <div class="col-md-5">
                  <?php 
                     $about_features = get_field('about_features', 'option');
                     foreach($about_features as $about_feature){
                  ?>
                  <div class="single_about">
                     <i class="fa <?php echo esc_attr($about_feature['icon']); ?>"></i>
                     <h4><?php echo $about_feature['title']; ?></h4>
                     <p><?php echo $about_feature['description']; ?> </p>
                  </div>
                  <?php } } ?>
                  
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
<?php get_footer(); ?>