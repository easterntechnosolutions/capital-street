<?php 
/*
Template Name: FAQs
*/
?>

<?php   
        get_header(); 
        get_template_part('parts/page-title'); 
?>



<!-- our service area start -->
<div class="rts-service-area rts-section-gap bg-service-h2 ptb--120 ptb_lg--40 ptb_md--30 ptb_sm--10 mt--0">
	<div class="container">            
		<div class="row g-5 mt--10">
			
		<?php 
        $args = array( 'post_type' => 'faq', 'posts_per_page' => -1 );
        $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : 
            $count = 1;
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        
			
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
				<!-- single service start -->
				<div class="rts-single-service-h2 inner">
					<a href="<?php echo get_permalink(); ?>" class="thumbnail">
						<?php the_post_thumbnail(); ?>
					</a>
					<div class="body" style="display: flex;justify-content: space-between;">
						<a href="<?php echo get_permalink(); ?>">
							<h5 class="title"><?php the_title(); ?></h5>
						</a>
					</div>
				</div>
				<!-- single service End -->
			</div>
                        
        <?php $count++;
            endwhile;
        wp_reset_postdata(); ?>                        
        <?php else:  ?>
        <p><?php _e( 'Sorry, no service matched your criteria.' ); ?></p>            
        <?php endif; ?>
			
		</div>
	</div>
</div>
<!-- our service area end -->


<?php get_footer(); ?>