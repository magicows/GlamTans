<?php
// Menus
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'header-menu' => __( 'Header Menu', 'glamtans' ),
) );

/**
 * Enqueue scripts and styles.
 */
function glamtan_scripts() {
	
	wp_enqueue_style( 'glamtan-main', get_template_directory_uri() . '/css/style-min.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), true );
	wp_enqueue_script( 'glamtan-plugins', get_template_directory_uri() . '/js/plugins.js', array(), true );
	wp_enqueue_script( 'template-functions', get_template_directory_uri() . '/js/functions.js', array(), true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'glamtan_scripts' );

/**
 * Enqueue Fonts and Icons
 */
function wpb_add_fonts_icons() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800', false ); 
	wp_enqueue_style( 'nothing-google-fonts', 'https://fonts.googleapis.com/css?family=Nothing+You+Could+Do', false );
	wp_enqueue_style( 'poiret-one', 'https://fonts.googleapis.com/css?family=Poiret+One', false ); 
	wp_enqueue_style( 'herr-google-fonts', 'https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff', false ); 
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_fonts_icons' );

// Allow .svg uploads and fix preview 

function svg_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;}
add_filter( 'upload_mimes', 'svg_mime_types' );

function svg_size() {
  echo '<style>
    svg, img[src*=".svg"] {
      max-width: 150px !important;
      max-height: 150px !important;
    }
  </style>';
}
add_action('admin_head', 'svg_size');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// ACF Options Icon in Wordpress Admin
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'menu_slug' 	=> 'footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}
