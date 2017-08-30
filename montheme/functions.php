<?php
function integration_enqueue_style() {
    wp_enqueue_style( 'mamies-wafers-bootstrap-min',  get_template_directory_uri().'/style.css', array(), null, 'all' );
    wp_enqueue_style( 'mamies-wafers-carousel',  get_template_directory_uri().'/smallscreen.css', array(), null, 'all' );

}

/* Autoriser les fichiers SVG */ 
function wpc_mime_types($mimes) {
   $mimes['svg'] = 'image/svg+xml';   return $mimes; 
}

add_filter('upload_mimes', 'wpc_mime_types');
add_action( 'wp_enqueue_scripts', 'integration_enqueue_style' );
add_theme_support('post-thumbnails');
add_image_size('featured_preview', 300, 200, true);
add_theme_support( 'title-tag' );
?>