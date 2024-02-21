<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Jewel Khan
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 */

function elementor_addon_register_hello_world_widget( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/Test_Widgets.php' );

    $widgets_manager->register( new \Test_Widgets() );

}
add_action( 'elementor/widgets/register', 'elementor_addon_register_hello_world_widget' );