<?php
class Test_Widgets extends \Elementor\Widget_Base {

    public function get_name() {
        return 'elementor_addon_test_widgets';
    }

    public function get_title() {
        return esc_html__( 'Test Widget', 'elementor-addon' );
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    public function get_keywords() {
        return [ 'jewel', 'akram' ];
    }

    protected function render() {
        ?>

        <p> Hello World </p>

        <?php
    }
}