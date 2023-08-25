<?php
/**
 * The front-page.php corresponds to the "static front page"
 * when setting static front page in Settings > Reading 
 */
?>

<?php  get_header(); ?>

<!-- banner area START -->
<div class="rts-banner-area-two eight">
    <div class="swiper mySwiperh3_banner">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class=" bg_banner-three eight-2 bg_image rts-section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-three-inner">
									<span class="subtitle-banner">Advocates for</span>
                                    <h2 class="title cd-headline clip is-full-width">
                                        Justice and Success
                                    </h2>
                                    <p class="disc">
                                        We are committed to finding creative and practical solutions to your legal challenges. Whether through negotiation, mediation, or litigation, we strive to achieve the best possible outcomes for our clients.
                                    </p>
                                    <div class="button-group">
                                        <a href="contact-us" class="rts-btn btn-primary-2">Connect</a>
                                        <a href="about-us" class="rts-btn btn-primary-2 transparent">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="swiper-slide">
                <div class=" bg_banner-three bg_image rts-section-gap eight">
                    <div class="container">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-slider/banner-02.jpg" > -->
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-three-inner">
                                    <span class="subtitle-banner">YOUR TRUSTED</span>
                                    <h2 class="title cd-headline clip is-full-width">
                                        LEGAL ADVISORS
                                    </h2>
                                    <p class="disc">
                                        Our lawyers have extensive knowledge and experience in their respective practice areas. We stay updated with the latest legal developments to provide you with the best advice and representation.
                                    </p>
                                    <div class="button-group">
                                        <a href="contact-us" class="rts-btn btn-primary-2">Connect With Us</a>
                                        <a href="about-us" class="rts-btn btn-primary-2 transparent">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class=" bg_banner-three eight-3 bg_image rts-section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-three-inner">
                                    <span class="subtitle-banner">Efficient and Effective</span>
                                    <h2 class="title cd-headline clip is-full-width">
                                        Legal Representation
                                    </h2>
                                    <p class="disc">
                                        We prioritize our client's needs and goals. Our team takes the time to listen, understand your unique circumstances, and tailor our services to meet your specific objectives.
                                    </p>
                                    <div class="button-group">
                                        <a href="contact-us" class="rts-btn btn-primary-2">Get Started</a>
                                        <a href="about-us" class="rts-btn btn-primary-2 transparent">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-navigation">
        <span class="swiper-button-prev"></span>
        <span class="swiper-button-next"></span>
    </div>
</div>
<!-- banner area END -->

<!-- about area two START -->
<div class="rts-about-area-two rts-section-gap about-two-bg">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-5 col-md-12 home-image">
                <div class="about-three-thumbnail-left">
					<?php 
					$image = get_field('intro_image');
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
                </div>
            </div>
            <div class="col-xl-7 col-md-12 pl--50 pl_md--15 pl_sm--15">
                <div class="about-right-three">
                    <div class="title-area-about-three">
                        <span class="sub"><?php the_field('intro_pre_title'); ?></span>
                        <h1 class="title"><?php the_field('intro_title'); ?></h1>
                    </div>
                    <div class="inner-about-three">
                        <p class="disc"><?php the_field('intro_description'); ?></p>
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="solution-wrapper">
                                    <?php if( have_rows('services') ):
                                        while( have_rows('services') ) : the_row(); ?>
                                                            
                                            <div class="single-business-solution">
                                                <i class="far fa-check"></i>
                                                <p><?php the_sub_field('service_name_list_1'); ?></p>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>                                                                        
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="solution-wrapper-right">
                                    <?php if( have_rows('services') ):
                                        while( have_rows('services') ) : the_row(); ?>
                                                            
                                            <div class="single-business-solution">
                                                <i class="far fa-check"></i>
                                                <p><?php the_sub_field('service_name_list_2'); ?></p>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row user-wrapper-1">
                        <div class="col-l2">
                            <div class="rts-user-three-wrapper">
                                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="rts-btn btn-primary-3"><?php the_field('intro_button'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area two END -->

<!-- start call to action area -->
<div class="skyline-img">
	<img src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2023/08/skyline.webp" alt="toronto-skyline">
</div>
<div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two counter-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-two-wrapper">
                    <div class="title-area">
                        <h3 class="title">Let’s discuss about how we can help <br>
                            make your legal goals a reality.</h3>
                    </div>
                    <a class="rts-btn btn-secondary-3" href="<?php echo esc_url(home_url('/contact-us')); ?>">Lets Work Together</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end call to action area -->

<!-- rts-counter up area start -->
<!-- <div class="rts-counter-up-area rts-section-gap counter-bg">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter">
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2023/07/1.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">858</span></h2>
                        <p class="disc">Successful Projects</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center two pl--30">
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2023/07/2.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">650</span></h2>
                        <p class="disc">Media Activities</p>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center three pl--50">
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2023/07/3.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title"><span class="counter animated fadeInDownBig">567</span></h2>
                        <p class="disc">Skilled Experts</p>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-end four">
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2023/07/4.svg" alt="Business_counter">
                    <div class="counter-details">
                        <h2 class="title happy"><span class="counter animated fadeInDownBig">28</span></h2>
                        <p class="disc">Happy Clients</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div> -->
<!-- rts-counter up area end -->

<!-- why choose us start -->
<div class="rts-working-process rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-style-six text-center">
                    <div class="pre-title">
                        <span class="pre"><?php the_field('pre_title-2'); ?></span>
                    </div>
                    <h2 class="title"><?php the_field('title-2'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row mt--20">
        
            <?php if( have_rows('qualities') ):
                while( have_rows('qualities') ) : the_row(); ?>
                
                <div class="col-xl-3 col-md-6">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon text-center">
                            <?php 
                                $image = get_sub_field('choose_image');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <h5 class="title text-center"><?php the_sub_field('choose_title'); ?></h5>
                        <p class="disc content-justify"><?php the_sub_field('choose_description'); ?></p>
                        <a href="about-us" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                    </div>                        
                    <!-- single-service area end -->
                </div>

                <?php endwhile; ?>
            <?php endif; ?>           

        </div>
    </div>
</div>
<!-- why choose us end -->

<!-- start team section -->
<div class="rts-team-area-style-six rts-section-gap">
    <div class="team-bg-image-style-six">
        <img src="../../../wp-content/uploads/2023/07/bg-02.webp" alt="bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-style-six text-center">
                    <div class="pre-title">
                        <span class="pre"><?php the_field('member_pre_title'); ?></span>
                    </div>
                    <h2 class="title title-colr"><?php the_field('member_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--0">
            <div class="swiper mySwiperh1_team">
                <div class="swiper-wrapper">
                
                    <?php 
                    $args = array( 'post_type' => 'team',  );
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
<!-- end team section -->

<!-- Blog area start -->
<div class="rts-blog-area4 rts-section-gap pb--140 blog-position">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center title-service-three">
                    <p class="pre-title"><?php the_field('blog_pre_title'); ?></p>
                    <h2 class="title"><?php the_field('blog_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
        <?php 
            $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
            $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="service-one-inner-four">
                            <div class="big-thumbnail-area">
								<div class="thumbnail">																
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="content">
                                    <h5 class="title"><?php the_title(); ?></h5>
                                </div>
                                <div class="author-box">
                                    <p class="date"><?php echo get_the_date("j F, Y");?></i></p>
                                    <p class="author">by <?php the_field('blog_author'); ?></i></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>            
            <?php endif; ?>                        
        </div>
    </div>
</div>
<!-- Blog area end -->










<?php get_footer(); ?>
