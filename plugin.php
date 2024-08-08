<?php
/**
 * Plugin Name: Verticle Slider With Animation
 * Description: A custom Elementor widget that displays Verticle Slider
 * Version: 1.0
 * Author: HusainKaizar
 * Author URI: https://jwebtech.com/
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function register_custom_widget() {
    require_once plugin_dir_path( __FILE__ ) . 'widget.php';
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new My_Custom_Widget() );
}
add_action( 'elementor/widgets/widgets_registered', 'register_custom_widget' );
