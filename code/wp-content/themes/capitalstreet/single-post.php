<?php  get_header(); ?>

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Blog</h1>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span> / </span>
                    <a href="blog" class="active">Blog</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- rts blog mlist area -->
<div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->

                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    
                <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <?php the_post_thumbnail(); ?>
                            <!-- <img src="assets/images/blog/blog-lg-1.jpg" alt="Business-Blog"> -->
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by <?php the_field('blog_author'); ?></span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo get_the_date('j F, Y');?></span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <h3 class="title"><?php the_title(); ?></h3>
                            <?php
                                if (have_posts()) {
                                    $count = 1;
                                    while (have_posts()) : the_post();
                                        if( have_rows('content_blocks') ) {
                                            while( have_rows('content_blocks') ): the_row(); ?>
                                                <section id="content_block_<?php echo $count; ?>" class="content_blocks_lists content_block_<?php echo $count; ?>">
                                                    <?php
                                                        echo $sub_content_block = get_sub_field('content_block');
                                                    ?>
                                                </section><?php
                                                $count++;
                                            endwhile;
                                        } 
                                    endwhile;
                                } else {
                                    echo "<h3>No Contents Found.</h3>";
                                } ?>

                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wizered area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                    
                    <!-- single wizered start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Recent Posts
                            </h5>
                        </div>
                        <div class="wized-body">

                            <!-- recent-post -->

                            <?php 
                                $args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
                                $the_query = new WP_Query( $args ); 
                                ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <div class="recent-post-single">
                                        <div class="thumbnail center-cropped">
                                            <a href="<?php echo get_permalink(); ?>">
                                            
                                                <?php the_post_thumbnail(); ?>
                                                <!-- <img src="<?php the_post_thumbnail(); ?>" alt="Blog_post"> -->
                                            </a>
                                        </div>
                                        <div class="content-area">
                                            <div class="user">
                                                <i class="fal fa-clock"></i>
                                                <span><?php echo get_the_date("j F, Y");?></span>
                                            </div>
                                            <a class="post-title" href="<?php echo get_permalink(); ?>">
                                                <h6 class="title"><?php the_title(); ?></h6>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <?php else:  ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>            
                                <?php endif; ?>

                            <!-- recent-post End -->
                            
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized contact">
                        <div class="wized-header">
                            <a href="<?php echo esc_url(home_url('/contact-us')); ?>"><img src="<?php echo esc_url(home_url('/wp-content/uploads/2023/06/capital-street-footer-logo.png')); ?>" alt="Business_logo"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here To Assist You</h5>
                            <a class="rts-btn btn-primary" href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- rts blog mlist area End -->

<?php get_footer(); ?>