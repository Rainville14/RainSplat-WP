<?php 


add_action( 'wp_enqueue_scripts', 'rainsplat_theme_scripts' );
function rainsplat_theme_scripts() {
    wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}