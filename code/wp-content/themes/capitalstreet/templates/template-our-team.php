<?php 
/*
Template Name: Our Team
*/
?>

<?php   
        get_header(); 
        get_template_part('parts/page-title'); 
?>



<div class="rts-team-details rts-section-gap">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-12 col-md-12">
				<div class="details-thumb">
					<?php 
					$image = get_field('team_image');
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>					
				</div>
			</div>
			<div class="col-xl-6 col-lg-12 col-md-12 pl--90 pr_sm--15 pl_sm--15 pt--10 pt_lg--40 pt_md--40 pt_sm--20" style="display: flex;align-items: center;">
				<div class="details-right-inner">
					<div class="title-area">
						<h2 class="animated fadeIn"><?php the_field('team_title'); ?></h2>
					</div>
					<div class="team-line"></div>
					<p><?php the_field('team_subheading'); ?>

					</p>
					<a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="rts-btn btn-primary"><?php the_field('team_button_text'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- start team section -->
<div class="rts-service-area rts-section-gapTop pb--100 service-two-bg bg_image">   
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-style-six text-center">
                    <div class="pre-title">
                        <span class="pre"><?php the_field('member_pre_title'); ?></span>
                    </div>
                    <h2 class="title" ><?php the_field('member_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--0">

        <div class="swiper mySwiperh1_team">
                <div class="swiper-wrapper">

                    <?php 
                    $args = array( 'post_type' => 'team', 
					 'post_status' => 'publish',
					 'post_per_page' => -1,
       			     'nopaging' => false,
	  			     'order'    => 'DESC',
					 'orderby'  => 'date',
					);
                    $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        
                        <!-- single service area -->                       
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/team/team-1.jpg" alt="Business_Team_single">                                         -->
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <h5 class="title"><?php the_title(); ?></h5>
                                    </a>
                                    <p><?php the_field('job_title') ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- single service area end-->
                                    
                    <?php endwhile;
                    wp_reset_postdata(); ?>                        
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>            
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
<!-- end team section -->


<?php get_footer(); ?>