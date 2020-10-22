<?php

function rob_moore_theme_support() {
  add_theme_support("title-tag");

}

add_action("after_setup_theme", "rob_moore_theme_support");
  
function css_files() {
    wp_enqueue_style("main", get_stylesheet_uri());
    wp_enqueue_style("font1", "https://fonts.googleapis.com/css2?family=Saira:wght@300;400;500;700&display=swap");
    wp_enqueue_style("font2", "https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap");
}

add_action("wp_enqueue_scripts", "css_files");

function js_scripts() {
  wp_enqueue_script('script1', get_stylesheet_directory_uri().'/app.js', array(), "1.0", true);
}

add_action("wp_enqueue_scripts", "js_scripts");

function w3reign_svg_mime_type( $mimes = array() ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
  }

add_filter( 'upload_mimes', 'w3reign_svg_mime_type' );

function rob_moore_menus() {

  $locations = array(

    "primary" => "Nav Bar"

  );
  register_nav_menus($locations);
}

add_action("init", "rob_moore_menus");

add_action( 'wp_head', 'add_viewport_meta_tag' , '1' );

function add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}

?>