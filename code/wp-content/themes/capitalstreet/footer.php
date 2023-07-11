<footer>
	<?php 
		$attachment_image = get_field('logo', 'option');
		$logo_array = wp_get_attachment_image_src( $attachment_image['ID'] ); 
	?>
	<!-- Start footer area -->
    <div class="rts-footer-area footer-three footer-four rts-section-gapTop footer-bg-2">
        <div class="container pb--80 pb_sm--40">
            <div class="row g-5">
                <!-- footer first area -->
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12 footer-first-section">
                    <div class="footer-three-single-wized left">
                        <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        <?php } ?>
                    </div>
                </div>                
                <!-- footer secand area -->
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12 footer-middle-section">
                    <div class="footer-three-single-wized link-title">                        
                        <?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        <?php } ?>                        
                    </div>
                </div>
                <!-- footer third area -->
                <div class="col-xl-2 col-lg-6 col-sm-6 col-xs-12 footer-middle-section">
                    <div class="footer-three-single-wized right link-title">
                        <?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        <?php } ?>                        
                    </div>
                </div>
                <!-- footer fourth area -->
                <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12 footer-middle-section">
                    <div class="footer-one-single-wized mid-bg link-title-end">
                        <?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
                            <?php dynamic_sidebar( 'footer-4' ); ?>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
        <!-- footer fifth area -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 end-footer-flex disc">
                        <?php if ( is_active_sidebar( 'footer-5' ) ) { ?>
                            <?php dynamic_sidebar( 'footer-5' ); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENd footer Area -->
	
    <!-- start loader -->
<!--     <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->
</footer>			
					
			<?php wp_footer(); ?>
		</div><!-- page-wrapper -->
	</body>
</html>