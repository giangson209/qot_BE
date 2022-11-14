<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- <meta charset="<?php bloginfo( 'charset' ); ?>"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/lib/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/lib/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/font-awesome.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/aos.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/style.css"> 
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/lib/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" title="" href="https://channel.mediacdn.vn/Magazine/web20200701032610/css/fancybox.min.css"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
   <div class="head-menu">
       <div class="container">
           <div class="content-menu">
               <div class="row align-items-center">
                   <div class="col-md-3 col-sm-6 col-6">
                       <div class="logo"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt=""></a></div>
                   </div>
                   <div class="col-md-9 col-sm-6 col-6">
                       <div class="btn-bar d-none text-right"><a href="javascript:void(0)"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/h-bar.png" class="img-fluid" alt=""></a></div>
                       <div class="h-menu">
                           <ul>
                               <li><a href="">Concept</a></li>
                               <li><a href="">Vind een kot</a></li>
                               <li><a href="">Blog</a></li>
                               <li><a href="">Contact</a></li>
                               <li><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/h-bar.png" class="img-fluid" alt=""></a></li>
                           </ul>
                       </div>
                       <div class="menu-mobile">
                           <div class="close-menu"><a href="javascript:void(0)">&times;</a></div>
                           <ul>
                               <li><a href="">Concept</a></li>
                               <li><a href="">Vind een kot</a></li>
                               <li><a href="">Blog</a></li>
                               <li><a href="">Contact</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</header>