<?php
/// Registro de imagenes ///
add_theme_support( 'post-thumbnails' );
add_image_size( 'homepage-facebook', 100, 100, true );
add_image_size( 'homepage-twitter', 280, 150, true );

function register_my_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'menu-principal' ) );
}
add_action( 'init', 'register_my_menu' );

?>