<?php

$log_box_args = array(
	'name'          => __( 'login Box', 'twentythirteen' ),
	'id'            => 'my-login-box',
	'description'   => '',
     'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
	
	register_sidebar($log_box_args);
	
	$top_box_args = array(
	'name'          => __( 'Top Posts Box', 'twentythirteen' ),
	'id'            => 'my-top-posts-box',
	'description'   => '',
     'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
	
	register_sidebar($top_box_args);