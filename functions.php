<?php

function wrc_theme_support(){
	add_theme_support( 'title-tag' );
	add_theme_support('custum_logo');
	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'wrc_theme_support');

function wrc_register_styles(){
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('wrc_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', array(), '1.0', 'all');
	wp_enqueue_style('wrc_animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), '1.0', 'all');
	wp_enqueue_style('wrc_css', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'wrc_register_styles');

function wrc_register_script(){
	
	wp_enqueue_script('wrc_aos_script', get_template_directory_uri() .'/assets/vendor/aos/aos.js', array(), '1.0',true );
	wp_enqueue_script('wrc_bootstrap_script', get_template_directory_uri() .'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0',true );
	wp_enqueue_script('wrc_glightbox_script', get_template_directory_uri() .'/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0',true );
	wp_enqueue_script('wrc_isotope_script', get_template_directory_uri() .'/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0',true );
	wp_enqueue_script('wrc_phpemail_script', get_template_directory_uri() .'/assets/vendor/php-email-form/validate.js', array(), '1.0',true );
	wp_enqueue_script('wrc_swiper_script', get_template_directory_uri() .'/assets/vendor/swiper/swiper-bundle.min.js', array(), '1.0',true );
	wp_enqueue_script('wrc_main_script', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0',true );

}

add_action('wp_enqueue_scripts', 'wrc_register_script');



function wrc_menu(){
	$locations =array(
       'primary' => 'Desktop Primary Left Sidebar',
       'footer' => 'Footer Menu Items'
	);
	register_nav_menus($locations);
}

add_action('init', 'wrc_menu');


class CustomWalker extends Walker_Category {

	 
	function start_el(&$output, $item, $depth=0, $args=array(),$current_object_id = 0) {

		// Dont print parent category "all"
		if ($item->term_id != 161) {
			$output.= '<li data-filter=".filter-'.strtolower($item->name).'">'.esc_attr($item->name);
		} else {
			$output.='<li data-filter="*" class="filter-active">All</li>';
		}


	}
	 
	function end_el(&$output, $item, $depth=0, $args=array()) {
		$output .= "</li>";
	}
}

