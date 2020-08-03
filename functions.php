<?php
// Nav Walker Likn
require_once ('inc/nav_walker.php');




// Style Sheet && JS ADD --------------------------
function styleAndscriptADD(){
/* ---------------------------- Style ADD ---------------------------- */
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animated.css', array(), '1.0', 'all');
    wp_enqueue_style('fontasome', get_template_directory_uri().'/font-awsome/css/all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('fontasome-min', get_template_directory_uri().'/font-awsome/css/fontawesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/css/bootstrap-min.css', array(), '1.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0', 'all' );
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0', 'all');

/* ------------------------------- Script ADD ------------------------------- */
    wp_enqueue_script('jquery-min', get_template_directory_uri().'/https://code.jquery.com/jquery-3.2.1.slim.min.js',array('jquery'),'1.0','true');
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri().'/js/bootstrap-min.js',array('jquery'),'1.0','true');
    wp_enqueue_script('jquery-js', get_template_directory_uri().'/js/jquery.js',array('jquery'),'1.0','true');
    wp_enqueue_script('popper-js', get_template_directory_uri().'/js/popper.js',array('jquery'),'1.0','true');
    wp_enqueue_script('fontawesome-min-js', get_template_directory_uri().'/font-awsome/js/fontawesome.min.js',array('jquery'),'1.0','true');
    wp_enqueue_script('all-js', get_template_directory_uri().'/font-awsome/js/all.min.js',array('jquery'),'1.0','true');
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js',array('jquery'),'1.0','true');

}
add_action('wp_enqueue_scripts','styleAndscriptADD');


// Feathered Images Add -----------------
function add_images(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','add_images');



// Menu Register -------------
function menu_Register(){
    register_nav_menus(array(
        'primary_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    )
   );
}
add_action('after_setup_theme','menu_Register');





// Input Value Safe Validation

function get_safe_value($con,$str){
    if($str!=''){
        $str=trim($str);
        return mysqli_real_escape_string($con,$str);
    }
}

// Woocomerce Theme Support

function woocomerce_support_jakaria(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme','woocomerce_support_jakaria');





/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 4; // 4 products per row
    }
}


