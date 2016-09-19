<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package westfalen
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylesheets -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<!-- Load Google Fonts -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:black">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lora">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <!-- AIzaSyDAzZ_porvxBsxpbhHhe-S9pi2dOWb56Sg  -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- <div id="page" class="site"> -->

<div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'westfalen' ); ?></a>

  <?php 
  if ( is_front_page() && is_home() ) {
    // Default homepage

  ?>

  <!-- Begin Hero -->
  <div id="hero">
    <header id="masthead" class="" role="banner">
      <!-- Navigation Menu -->
      <nav class="navbar navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header hidden-md hidden-lg" style="background-color: #fff;">
<div class="container">
              <?php the_custom_logo(); ?> 
            <button type="button" class="menu-toggle collapsed" data-toggle="collapse" data-target="#collapseSidebar" aria-expanded="false">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
</div>
          </div>
        <div class="container">


          <div class="">
              <?php
              if ( is_front_page() && is_home() ) : ?>
                <div class="hidden-sm hidden-xs">
                    <?php the_custom_logo(); ?> 
                </div>
              <?php else : ?>

              <div class="hidden-sm hidden-xs">
                  <?php the_custom_logo(); ?> 
              </div>


              <?php
              endif;

              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
              <?php
              endif; ?>
          </div><!-- .site-branding -->    
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <div class="nav navbar-nav">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              <div class="nav-menu-button hidden-sm hidden-xs">
                <a style="color: #262C37" data-toggle="collapse" href="#collapseSidebar" aria-expanded="false" aria-controls="collapseSidebar"><b>MENÜ</b><span style="background-color: red; padding: 5px 10px 7px 10px; color: #fff;"><i class="fa fa-bars" aria-hidden="true"></i></span></a>
              </div>        
            </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!-- End Navigation Menu -->  
    </header><!-- #masthead -->
  </div>
    <!-- End Hero -->   


<?php


} elseif ( is_front_page() ) {
  // static homepage
} elseif ( is_home() ) {
  // blog page
} else {

?>
      <!-- Navigation Menu -->
      <nav class="navbar navbar-fixed-top" style="background-color: #fff; -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapseSidebar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="">
              <?php
              if ( is_front_page() && is_home() ) : ?>

                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
              <?php else : ?>

                  <?php the_custom_logo(); ?> 


              <?php
              endif;

              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
              <?php
              endif; ?>
          </div><!-- .site-branding -->    
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <div class="nav navbar-nav">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              <div class="nav-menu-button hidden-sm hidden-xs">
                <a style="color: #262C37" data-toggle="collapse" href="#collapseSidebar" aria-expanded="false" aria-controls="collapseSidebar"><b>MENÜ</b><span style="background-color: red; padding: 5px 10px 7px 10px; color: #fff;"><i class="fa fa-bars" aria-hidden="true"></i></span></a>
              </div>        
            </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!-- End Navigation Menu -->  
<?php



}


 ?>

  

      <div class="collapse" id="collapseSidebar">
        <div class="sidebar">
          <div class="sidebar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <a style="padding: 50px 60px;" data-toggle="collapse" href="#collapseSidebar" aria-expanded="true" aria-controls="collapseSidebar">
            <b>MENÜ</b><span ><i style="color: #EF3D3E;" class="fa fa-times" aria-hidden="true"></i></span>
          </a>

          <?php wp_nav_menu( array( 'theme_location' => 'primary',
                                    'menu_class' => 'nav-menu',
                                    'menu_id' => 'primary-menu' ) 
            ); ?> 
      
          </div>
        </div>      
      </div>       

	<div id="content" class="site-content">
