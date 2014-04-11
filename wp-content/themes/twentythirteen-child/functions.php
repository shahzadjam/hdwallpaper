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
	if ( function_exists('register_sidebar') )
 
	
	register_sidebar($top_box_args);
	
	   register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
 
    register_sidebar(array('name'=>'sidebar-right'
    ));
	
	register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
 
    register_sidebar(array('name'=>'sidebar-left'
    ));
	
	if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'homepage-thumb', 181, 132, true );
	add_image_size( '00x600-thumb', 00, 600 , true );
	add_image_size( '1024x768-thumb', 1024, 768, true );
	add_image_size( '1152x864-thumb', 1152, 864, true );
	add_image_size( '1280x960-thumb', 1280, 960, true );
	add_image_size( '1400x1050-thumb', 1400, 1050, true );
	add_image_size( '1400x1050-thumb', 1400, 1050, true );
	add_image_size( '1440x1080-thumb', 1440, 1080, true );
	add_image_size( '1280x1024-thumb', 1280, 1024, true );
	add_image_size( '1600x1200-thumb', 1600, 1200, true );
	add_image_size( 'slider-thumb', 569, 303, true ); //(cropped)
}
function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="jPaginate jPag-pages"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
