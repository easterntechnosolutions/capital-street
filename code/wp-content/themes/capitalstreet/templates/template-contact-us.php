<?php 
/*
Template Name: Contact Us
*/
?>

<?php   
        get_header(); 
        get_template_part('parts/page-title'); 
?>

<!-- conact us form fluid start -->
<div class="rts-contact-form-area">
    <div class="container mt--80 mb--80">
        <div class="row">
            <!-- <div class="col-12"> -->
                <div class="col-lg-7 col-md-12">
                    <div class="rts-contact-fluid pt--60 pb--60 ">
                        <div class="rts-title-area contact-fluid text-center mb--50">
                            <p class="pre-title">
                                Need Help?
                            </p>
                            <h2 class="title">Let’s Get in Touch</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="rts-sidebar-menu-desktop contact-details col-lg-5 col-md-12">                                     					
					<div class="get-in-touch" >
						<h4>Connect With Us</h4>
						<div class="wrapper">
							<!-- single cont-detail -->
							<div class="single cont-detail">
								<i class="fas fa-phone-alt"></i>
								<a href="tel:<?php echo get_field('number', 'option'); ?>"><?php echo get_field('number', 'option'); ?></a>
							</div>
							<div class="single cont-detail">
								<i class="fas fa-fax"></i>
								<a href="fax:<?php echo get_field('fax', 'option'); ?>"><?php echo get_field('fax', 'option'); ?></a>
							</div>
							<div class="single cont-detail">
								<i class="fas fa-envelope"></i>
								<a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
							</div>		
							<div class="single cont-detail">
								<i class="fas fa-globe"></i>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_field('website_link', 'option'); ?></a>
							</div>
							<div class="single cont-detail">
								<i class="fas fa-map-marker-alt"></i>
								<a href="<?php echo get_field('address_link', 'option'); ?>" target="_blank"><?php echo get_field('address', 'option'); ?></a>
							</div>
							<!-- single cont-detail ENd -->
						</div>
                        
						<div class="social-wrapper-two menu cont-social">
							<a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="<?php echo get_field('linkedin', 'option'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
                        
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front cont-card">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team/contact-card.jpg" alt="Contact Card Front">
                                </div>
                                <div class="flip-box-back cont-card">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team/cont-card-back.jpg" alt="Contact Card Back">
                                </div>
                            </div>
                        </div> 

					</div>
				</div>

                </div>
            <!-- </div> -->
        </div>
    </div>
</div>
<!-- conact us form fluid end -->

<!-- bizup map area start -->
<div class="rts-contact-map-area">
    <div class="contaciner-fluid">
        <div class="row">
            <div class="col-12">
                <div class="contact-map-area-fluid">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2880.6474029426267!2d-79.2501808!3d43.780177599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d100c84fffff%3A0x94bfed76f6083d36!2s80%20Corporate%20Dr%20Suite%20312%2C%20Scarborough%2C%20ON%20M1H%203G5%2C%20Canada!5e0!3m2!1sen!2sin!4v1687174060147!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <img class="location" src="assets/images/contact/shape/location.svg" alt="Business_map"> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bizup map area end -->

<?php get_footer(); ?>
