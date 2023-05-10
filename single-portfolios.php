<?php get_header(); ?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
            <h2><?php the_title(); ?></h2>
                <img src="<?php the_post_thumbnail_url();?>" alt="">
                <?php the_content(); ?>
                <div class="row">
                   <div class="col-xl-12">
                     <h4>project gallery</h4>
                   </div>
                    <?php 
                        $gallerys = get_field('project_gallery');
                        if($gallerys){
                        foreach( $gallerys as $gallery){
                    ?>
                    <div class="col-xl-4">
                      <div class="project-gallery">
                         <img src="<?php echo $gallery['url']; ?>" alt="">
                      </div>
                   </div>
                    <?php }} ?>
                   
                </div>
                <br><br>
                <div class="row">
                   <div class="col-xl-12">
                        <h4>project overview</h4>
                        <?php the_field('project_video');?>
                   </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>
                    <ul>
                        <?php 
                            $techs = get_field('project_technology');

                            if($techs){

                            foreach( $techs as $tech){
                        ?>
                                <li><i class="fa fa-arrow-right"></i> <?php echo $tech['technology_text'] ?></li>
                        <?php 
                             } 
                            }
                        
                        ?>
                            
                            
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                    <?php 
                            $featurs = get_field('project_features');

                            if($featurs){

                            foreach( $featurs as $featur){
                    ?>
                        <li><i class="fa fa-arrow-right"></i> <?php echo $featur['features_text'] ?></li>

                    <?php } }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>