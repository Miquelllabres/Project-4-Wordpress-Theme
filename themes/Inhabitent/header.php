<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				
   			<?php
				if (is_front_page( ) ){
					$class = "/images/logos/inhabitent-logo-tent-white.svg";

				} elseif (is_page('about')){
					$class = "/images/logos/inhabitent-logo-tent-white.svg";
				}
				else { 
					$class = "/images/logos/inhabitent-logo-tent.svg";
					$teal = "teal";
				}
				
				?>

				<div  class="<?php echo $class ?>">
				

				<div id="nav">
						<div class="flex">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_bloginfo("stylesheet_directory").$class;$zindex?>" class="logo">
						</a>	

								<nav id="site-navigation" class="<?php echo $teal ?> main-navigation uppercase " role="navigation">
								<button class="<?php echo $nav?> menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								<!-- <div><i class="fa fa-search"></i></div -->
								</nav>

									

						</div>

					</div>

				</div>


				<!-- <div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div> --><!-- .site-branding -->

				<!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
