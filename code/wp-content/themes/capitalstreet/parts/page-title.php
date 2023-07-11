<?php
	global $post;
	if (has_post_thumbnail( $post->ID ) ) {
		$feaured_image = get_the_post_thumbnail_url(); 
	} else {
		$feaured_image = get_stylesheet_directory_uri() . "/images/home/bg-01.jpg";
	}
?>

<!-- Page Title -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url(<?php echo $feaured_image; ?>);">
    <div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1" >
							
				<?php
					if ( is_front_page() && is_home() ) {
					echo  "<h2 >";
					} else {
					echo "<h1 class='title'>";
					}
					if (is_blog()) :
						if (is_category()) :
							single_cat_title("Category: ");

						elseif (is_tag()) :
							single_tag_title("Tag: ");

						elseif (is_day()) : 
							echo "Day of : " . get_the_time('l, F j, Y');

						elseif (is_month()) :
							echo "Month of : " . get_the_time('F Y');

						elseif (is_year()) :
							echo "Year of : " . get_the_time('Y');

						elseif (is_single()) :
							echo get_the_title( get_option( 'page_for_posts' ) );

						else:
							echo get_the_title( get_option( 'page_for_posts' ) );
					endif;

					elseif (is_post_type_archive()) :
						post_type_archive_title();

					elseif (is_tax()) :
						global $wp_query;
						$term = $wp_query->get_queried_object();
						$title = $term->name; 
						echo $title;

					elseif (is_404()):
						echo "Page not found";

					elseif (is_search()):
						echo "Search results";

					elseif (is_author()) : 
						global $post;
						$author_id = $post->post_author; ?>
						Posts by <?php $field='display_name'; echo the_author_meta( $field, $author_id );
						
				elseif (get_post_type() == 'ourteam') :
						echo "Leadership Team";
					else :
						the_title();
					endif;
				if ( is_front_page() && is_home() ) {
					echo  "</h1>";
				} else {
					echo "</h2>";
				} ?>
				
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
						<span> / </span>
					<a href="<?php the_permalink(); ?>" class="active"><?php the_title(); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Page Title -->
