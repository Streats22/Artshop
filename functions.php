<?php

function stedelijkProject_load_script_styles(){
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css');
   /* wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/art-theme.css');*/

}
add_action( 'wp_enqueue_scripts', 'stedelijkProject_load_script_styles' );

function stedelijkProject_init_theme() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' ),
            'footer-menu'=> __('Footer menu')
        )
    );
}

add_action( 'init', 'stedelijkProject_init_theme' );

?>
