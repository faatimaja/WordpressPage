<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 *
 * @package Entazis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- FONT AWESOME INCLUDED -->
<script src="https://use.fontawesome.com/cd6441e0d0.js"></script> <!-- Je li treba? -->


<!-- BULMA CSS CDN -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

	<?php wp_head(); ?>
</head>

<section id="header" class="section header">
	<div class="container is-fluid">
		
<!-- logo is here -->
		<div class="navbar-brand">
			<a class="logo" href="#s_intro">
			<img src="<?php echo get_template_directory_uri(); ?>/img/entazis_logo.png" />
		</a>
	
<!-- menu start here -->
<span class="menu-mobile-bar"></span>
    <div id="navbarBasicExample" class="navbar-menu"> <!--is-active">-->
        <div class="navbar-end">
			<?php wp_nav_menu( array('theme_location' => 'menu-1',));?>
			
		</div><!--NAVBAR END-->

	</div><!--NAVBAR BRAND-->
	</div><!--CONTAINER END-->
</section><!--SECTION HEADER END-->

  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
 <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</a>-->

<script>
jQuery(document).ready(function(){
 jQuery(".menu-mobile-bar").click(function(){
    jQuery(".navbar-menu").toggleClass('mobile');
 });
});
</script>

<body <?php body_class(); ?>>