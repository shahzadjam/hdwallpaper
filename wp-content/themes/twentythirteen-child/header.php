<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>-child/css/style-pegination.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>-child/css/responsive.css" rel="stylesheet" type="text/css" />		
<!-- bxSlider CSS file -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/jquery-1.3.2.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>-child/jquery.paginate.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>-child/js/responsive.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>

		<!-- wrapper start -->
        <div id="wrapper">
        <!--  header start -->
        	<div class="header">
            	
                <div class="headerInner clearfix">
                	<div class="headerOuterLft fLeft clearfix">
                    	<div class="welcome fLeft">
                        	<p>Welcome to HD Wallpapersinn.com</p>
                        </div>
                        
                        <div class="inputOuter fRight clearfix">
                        	<input name="" class="input fLeft" placeholder="Enter your search keywords here...." type="text" />
                            <div class="inputButton fLeft"></div>
                        </div>
                        
                    </div>
                    <div class="your fRight">
                    	<div class="display clearfix">
                        	<h3>Your Display Features</h3>
                        </div>
                        <div class="ratio">
                       		<div class="wide">
                            	<p>Aspect Ratio:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wide</p>
                                <p class="none">Resolution :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1400 X 1900</p>
                            </div>
                             
                        </div>
                       <div class="ratioBottom"></div>
                    </div>
                </div>
                
                <div class="logoOuter">
                	
                    <div class="logoInner clearfix">
                    	<div class="logo fLeft"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>-child/images/logo.png" alt="" /></a></div>
                        <div class="googleBanner fRight"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>-child/images/googlebanner.jpg" alt="" /></a></div>
                    </div>
                    
                </div>
            	
                <div class="menuOuter">
                
               <div class="menuInner">
               
               <div class="menu clearfix">
               	
                
                <?php

				$defaults = array(
					'theme_location'  => '',
					'menu'            => 'Header Menu',
					'container'       => 'div',
					'container_class' => 'menu clearfix',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>
                	<!--<ul>
                    	<li><a href="#" class="active">Home</a></li>
                        <li><a href="#">HD Wallpapers</a></li>
                        <li><a href="#">Mac Wallpapers</a></li>
                        <li><a href="#">Female Celeb Female Celeb</a></li>
                        <li><a href="#">Male Celeb</a></li>
                        <li><a href="#">MotorBike</a></li>
                        <li><a href="#">Hair Style</a></li>
                        <li><a href="#">Animals</a></li>
                        <li><a href="#">Flowers</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Cars</a></li>
                        <li class="cl"><a href="#">3D</a></li>
                    </ul>-->
               
               		</div>	
             	 </div>
              </div>
           </div>
               <!--  header end -->