<?php 
/*
Template Name: About Us Content
*/
?>

<?php   
        get_header(); 
        get_template_part('parts/page-title'); 
?>

    <!-- service accordion area -->
    <div class="rts-accordion-area">
<!-- 		<div class="accordion-service-bg bg_image ptb--120 ptb_md--80 ptb_sm--60"> -->
        <div class="pt--100 pt_md--80 pt_sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="accordion-service-inner">
                            <div class="title-area-start">
                                <span class="sub color-primary"><?php the_field('accordion_pre_title'); ?></span>
                                <h2 class="title"><?php the_field('accordion_title'); ?></h2>
                            </div>
                            <div class="accordion-area">
                                <div class="accordion" id="accordionExample">
                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?php the_field('accordion_title_1'); ?><i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php the_field('accordion_description_1'); ?>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <?php the_field('accordion_title_2'); ?><i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php the_field('accordion_description_2'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">                                               
                                            <?php the_field('accordion_title_3'); ?> <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php the_field('accordion_description_3'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-6">
                        <div class="accordion-service-image pt_lg--60 pt_md--50 pt_sm--30">                            
<!--                             <img src="/wp-content/uploads/2023/06/about.webp" alt="About Us"> -->
							<?php 
							$image = get_field('about_image');
							if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
                        </div>
                    </div>
					
                </div>
            </div>
        </div>
    </div>
    <!-- service accordion area End -->

    <!-- about section start -->
    <div class="container pb--30">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                <div class="service-detials-step-1">                    
                    <div class="row g-5 mt--30 mb--40">
                        
                        <div class="col-xl-4 col-md-12 ">
                            <!-- single service details card -->
                            <div class="service-details-card about-details">                                
                                <div class="details">
                                    <h6 class="title"><?php the_field('about_us_title_1'); ?></h6>
                                    <p class="disc mt--10" style="text-align: justify;">
                                        <?php the_field('about_us_description_1'); ?>
                                    </p>
                                </div>
                            </div>
                            <!-- single service details card End -->
                        </div>
                        <div class="col-xl-4 col-md-12 ">
                            <!-- single service details card -->
                            <div class="service-details-card about-details">
                                <div class="details">
                                    <h6 class="title"><?php the_field('about_us_title_2'); ?></h6>
                                    <p class="disc mt--10" style="text-align: justify;">
                                        <?php the_field('about_us_description_2'); ?>
                                    </p>
                                </div>
                            </div>
                            <!-- single service details card End -->
                        </div>
                        <div class="col-xl-4 col-md-12 ">
                            <!-- single service details card -->
                            <div class="service-details-card about-details">
                                <div class="details">
                                    <h6 class="title"><?php the_field('about_us_title_3'); ?></h6>
                                    <p class="disc mt--10" style="text-align: justify;">
                                    <?php the_field('about_us_description_3'); ?>
                                    </p>
                                </div>
                            </div>
                            <!-- single service details card End -->
                        </div>
                        
                    </div>                    
                </div>                
                <!-- service details left area end -->                
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- our service area start -->
    <div class="rts-service-area rts-section-gapTop pb--200 pb_sm--120 pt_lg--70 pb_lg--130 service-two-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area service text-center">
                        <p class="pre-title"><?php the_field('service_pre_title'); ?></p>
                        <h2 class="title"><?php the_field('service_title'); ?></h2>
                    </div>
                </div>
            </div>        

            <div class="row g-5 service padding-controler">
                <?php 
                $args = array( 'post_type' => 'services', 'posts_per_page' => 3 );
                $the_query = new WP_Query( $args ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    
                    <!-- single service area -->
                    <div class="col-xl-4 col-lg-4 col-12 pb--140 pb_lg--100 pb_md--30 pb_sm--60">
                        <div class="service-two-inner">
                            <a href="<?php echo get_permalink(); ?>" class="thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            <div class="body-content">
                                <div class="hidden-area">
                                    <h5 class="title"><?php the_title(); ?></h5>
                                        <?php the_content(array( 'class' => 'dsic' )); ?>
                                    <a class="rts-read-more-two color-primary" href="<?php echo get_permalink(); ?>">Continue Reading<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single service area end-->
                    
                <?php endwhile;
                wp_reset_postdata(); ?>                        

                <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>            
                <?php endif; ?>

                <div class="col-12">
                    <div class="rts-title-area text-center">
                        <p class="pre-title title-position">
                            <a href="services">
                                <?php the_field('service_show_more'); ?> &nbsp;
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- our service area end -->
    


<?php get_footer(); ?>