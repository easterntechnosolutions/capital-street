<?php 
/*
Template Name: Services Content
*/
?>

<?php   
        get_header(); 
        get_template_part('parts/page-title'); 
?>

<!-- our service area start -->
<div class="rts-service-area rts-section-gapTop pb--200 service-two-bg bg_image">   
    <div class="container">
        <div class="row g-5 service padding-controler">

        <?php 
        $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
        $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : 
            $count = 1;
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <!-- single service area -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                <div class="service-two-inner all-services">
                    <a href="<?php echo get_permalink(); ?>" class="thumbnail">
                        <?php the_post_thumbnail(); ?>
                        <div class="serv-count"><?php echo $count ?></div>
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