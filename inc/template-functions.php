<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package mjexports
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mj_exports_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'mj_exports_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mj_exports_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'mj_exports_pingback_header' );


// Custom Functions
add_action('wp_enqueue_scripts','custom_child_styles_scripts',999);
function custom_child_styles_scripts()
{
	wp_enqueue_style('owl-theme-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"',array(),'1.0.0',false);
	wp_enqueue_style('owl-theme-css',get_stylesheet_directory_uri().'/dist/css/owl.theme.default.css',array(),'1.0.0',false);
	wp_enqueue_style('owl-css',get_stylesheet_directory_uri().'/dist/css/owl.carousel.css',array(),'1.0.0',false);
	wp_enqueue_style('custom-css',get_stylesheet_directory_uri().'/src/app.css',array(),'1.0.0',false);

	wp_enqueue_script('custom-jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js',array(),'1.0.0',true);
	wp_enqueue_script('owl-carousel',get_stylesheet_directory_uri().'/dist/js/owl.carousel.min.js',array(),'1.0.0',true);
	wp_enqueue_script('aos','https://unpkg.com/aos@2.3.1/dist/aos.js',array(),'1.0.0',true);
	wp_enqueue_script('custom-scripts',get_stylesheet_directory_uri().'/dist/js/custom.js',array(),'1.0.0',true);
	
}

//Removed unwanted menus
add_action( 'admin_init', 'customize_remove_admin_menus' );
function customize_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' ); //Comments
    remove_menu_page( 'tools.php' ); //Tools
    //remove_menu_page( 'options-general.php' ); //Settings
}

// Add options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Website Settings',
		'menu_title'	=> 'Website Settings',
		'menu_slug' 	=> 'website-eral-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}


//in functions
function register_my_menus() {
	register_nav_menus(
	  array(
		'footer-menu' => __( 'Footer' ),
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );


  function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="nav-controlls tac section global-vertial-padding"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li  class="controll-arrow">%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a class="page-number-style tac" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a class="page-number-style tac" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a class="page-number-style tac" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="controll-arrow">%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}

// Remove width and height from images

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
