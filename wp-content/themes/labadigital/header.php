<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name=”keywords” content=”Digital,Laba,Brescia,università,accademiadibellearti,laurea,diplomadisecondolivello”>
	<meta name="description" content="Laba Digital organizza il biennio di Web e App a Brescia">
	<meta name="author" content="francesca barbagallo">
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="row">
 		<div class="col1 clearfix">
 			 <div class="colonna-1-3">
				 <a href="http://localhost:8888/esame-labadigital/home/">
					 <img class="logotype" src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/cropped-logotype.png" alt="logotype labadigital">
				 </a>
			 </div>
			  <div class="colonna-1-5">
 					<nav role="custom-dropdown">
 						 <input type="checkbox" id="button">
 						 <label for="button" onclick></label>
 						 <ul>
 								<li><a href="home">Home</a></li>
 								<li><a href="corso">Corsi</a></li>
 								<li><a href="web">Web Design</a></li>
 								<li><a href="app">App Design</a></li>
 								<li><a href="contact">Contatti</a></li>
 								<li><a href="laba">Laba</a></li>
 						 </ul>
 					</nav>
 			 </div>
 		</div>
 		<!--/* chiudo row */-->
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
