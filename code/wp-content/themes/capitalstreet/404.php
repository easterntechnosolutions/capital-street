<?php get_header(); ?>

<!--<div class="main">-->
	<?php //get_template_part('parts/page-title'); ?>
	
	<!--<div class="section error-page-set" id="error-page">-->
	<!--	<h1 class="error">404</h1>-->
	<!--	<div class="page">-->
	<!--		<p><?php //esc_html_e('Ooops!!! The page you are looking for is not found.', 'flexibond'); ?></p>-->
	<!--	</div>-->
	<!--	<div class="btn-part">-->
	<!--		<a class="readon" href="<?php echo esc_url(home_url('/')); ?>">Back to home >></a>-->
	<!--	</div>-->
	<!--</div>-->
	
	<div class="rts-404-area ptb--50" style="background-color: #F1F1F1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="404wrapper text-center">
                        <div class="thumbnail">
                            <img src="/wp-content/uploads/2023/06/404.webp" alt="404 error" style="width: 415px;">
                        </div>
                        <h2 class="title mt--40">
                            Oops! Nothing Was Found
                        </h2>
                        <p class="disc text-center">Sorry, we couldn’t find the page you where looking for. We suggest that you return to homepage.</p>
                        <a class="rts-btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>">Back To Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</div>-->

<?php get_footer(); ?>
