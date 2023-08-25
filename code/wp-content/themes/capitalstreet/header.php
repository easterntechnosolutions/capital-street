<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<!-- Mobile Meta -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- Favicons and Icons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-0YR3XH8JVG"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'G-0YR3XH8JVG');
		</script>

	</head>

	<body <?php body_class(); ?>>

			<!-- Main Header--><?php
			$blog_info = get_bloginfo( 'name' );
			// $logo_full = "full";
			$email = get_field('email', 'option');
			$number = get_field('number', 'option');
			$attachment_image = get_field('logo', 'option');
			$logo_array = wp_get_attachment_image_src( $attachment_image['ID'] ); ?>
			<header class="header--sticky header-one header-four">
   				<!-- Header-Upper -->
			<div class="header-top header-top-one header-top-four header-top-five">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 location">
							<i class="fas fa-map-marker-alt"></i>
							<a href="<?php echo get_field('address_link', 'option'); ?>" target="_blank" class="top-left"><?php  echo get_field('address', 'option'); ?></a>
						</div>
						<div class="col-lg-6 right-h-three">
							<div class="header-top-right">
								<div class="single-right email">
									<i class="fas fa-envelope"></i>
									<a href="mailto:<?php echo $email; ?>">
										<?php echo $email; ?>
									</a>
								</div>
								<div class="single-right call">
									<i class="far fa-phone-volume"></i>
									<a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			<div class="header-main-one bg-white header-main-five">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="thumbnail">
								<?php
									if ( !empty($logo_array) ) { ?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
												<img src="<?php echo $logo_array[0]; ?>" alt="<?php echo $blog_info; ?>" title="<?php echo $blog_info; ?>" />
											</a>
										<?php
									}  
								?>                            
							</div>
						</div>
						<div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-6">
							<div class="main-header main-header-four main-header-five">
									
								<nav class="nav-main mainmenu-nav d-none d-xl-block">
									
								<?php 
									wp_nav_menu(
										array(
											'theme_location' => 'primary-navigation',
											'menu_class'     => 'primary-navigation mainmenu navigation clearfix',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'href'    	     => 'javascript:void(0)',	
											'walker'  => new Child_Wrap(),
											'list_item_class' => '',
											'link_class' => ''
										)
									);
								?>
									
								</nav>
								<div class="button-area">								
									<!-- <a href="#" class="rts-btn btn-primary btn-primary-4 ml--20 ml_sm--5 header-one-btn quote-btn">Book a Meeting</a> -->
									<button id="menu-btn" aria-label="mobile menu" class="menu rts-btn btn-primary-alta btn-primary-alta-four ml--20 ml_sm--5">
										<img class="menu-dark" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/menu.png" alt="Menu-icon">
										<img class="menu-light" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/menu-light.png" alt="Menu-icon1">
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		<!-- Sidebar Start -->
		
		<div id="side-bar" class="side-bar">
			<button class="close-icon-menu" aria-label="mobile menu hamburger"><i class="far fa-times"></i></button>
			<!-- inner menu area desktop start -->
			<div class="rts-sidebar-menu-desktop">
				<?php
					if ( !empty($logo_array) ) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-1" rel="home">
								<img src="<?php echo $logo_array[0]; ?>" class="logo" alt="<?php echo $blog_info; ?>" title="<?php echo $blog_info; ?>" />
							</a>
						<?php
					}  
				?>
					<!-- <img class="logo" src="assets/images/logo/logo-1.svg" alt="finbiz_logo"> -->

				<div class="body d-none d-xl-block">
					<p class="disc" style="text-align: justify;">
						We are a dedicated team of experienced lawyers providing comprehensive legal services in various areas of practice.
					</p>
					<div class="get-in-touch">
						<div class="h6 title">
							Get In Touch
						</div>
						<div class="wrapper">
							<!-- single -->
							<div class="single">
								<i class="fas fa-phone-alt"></i>
								<a href="tel:<?php echo get_field('number', 'option'); ?>"><?php echo get_field('number', 'option'); ?></a>
							</div>
							<div class="single">
								<i class="fas fa-fax"></i>
								<a href="fax:<?php echo get_field('fax', 'option'); ?>"><?php echo get_field('fax', 'option'); ?></a>
							</div>
							<div class="single">
								<i class="fas fa-envelope"></i>
								<a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
							</div>		
							<div class="single">
								<i class="fas fa-globe"></i>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_field('website_link', 'option'); ?></a>
							</div>
							<div class="single" style="display: flex;">
								<i class="fas fa-map-marker-alt" style="margin: 4px 15px 0 2px;"></i>
								<a href="<?php echo get_field('address_link', 'option'); ?>" target="_blank"><?php echo get_field('address', 'option'); ?></a>
							</div>
							<!-- single ENd -->
						</div>
						<div class="social-wrapper-two menu">
							<a href="<?php echo get_field('facebook', 'option'); ?>" aria-label="facebook icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="<?php echo get_field('twitter', 'option'); ?>" aria-label="twitter icon" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="<?php echo get_field('linkedin', 'option'); ?>" aria-label="linkedin icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="body-mobile d-block d-xl-none">
					<nav class="nav-main mainmenu-nav">

						<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'primary-navigation',
									'menu_class'     => 'mainmenu clearfix',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'href'    	     => 'javascript:void(0)',	
									'list_item_class' => '',
									'link_class' => ''
								)
							);
						?>

						<!-- <ul class="mainmenu">
							<li class="menu-item">
								<a class="menu-link" href="<?php echo esc_url(home_url('/')); ?>">Home</a>								
							</li>
							<li class="menu-item">
								<a class="menu-link" href="<?php echo esc_url(home_url('/about-us')); ?>">About Us</a>
							</li>
							<li class="has-droupdown menu-item">
								<a class="menu-link" href="<?php echo esc_url(home_url('/services')); ?>">Services</a>
								<ul class="submenu">																		

								</ul>
							</li>
							<li class="menu-item">
								<a class="menu-link" href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
							</li>
							<li class="menu-item">
								<a class="menu-link" href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact</a>
							</li>
						</ul> -->
					</nav>
					<div class="social-wrapper-two menu">
						<a href="<?php echo get_field('facebook', 'option'); ?>" aria-label="facebook icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="<?php echo get_field('twitter', 'option'); ?>" aria-label="twitter icon" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="<?php echo get_field('linkedin', 'option'); ?>" aria-label="linkedin icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>					
				</div>
			</div>
			<!-- inner menu area desktop End -->
		</div>

		<!-- Sidebar End -->
		<div id="anywhere-home" class=""></div>
    </header>

