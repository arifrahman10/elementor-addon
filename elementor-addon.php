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
    require_once( __DIR__ . '/widgets/Heading.php' );
    require_once( __DIR__ . '/widgets/Icon_list.php' );

    $widgets_manager->register( new \Test_Widgets() );
    $widgets_manager->register( new \Elementor_Addons_Heading() );
    $widgets_manager->register( new \Elementor_Addons_Icon_list() );

}

add_action( 'elementor/widgets/register', 'elementor_addon_register_hello_world_widget' );


function elementor_addon_register_elementor_widget_categories($elements_manager)
{

    $elements_manager->add_category(
        'elementor-addons',
        [
            'title' => esc_html__( 'Elementor Addons', 'textdomain' ),
            'icon' => 'fa fa-plug',
        ]
    );

}


add_action( 'elementor/elements/categories_registered', 'elementor_addon_register_elementor_widget_categories' );