<?php

class Elementor_Addons_Icon_list extends \Elementor\Widget_Base {

	public function get_name() {
		return 'elementor_addons_icon_list';//
	}

	public function get_title() {
		return esc_html__( 'Icon List (Elementor Addons)', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-editor-list-ul';
	}

	public function get_categories() {
		return [ 'elementor-addons' ];
	}

	public function get_keywords() {
		return [ 'List', 'Icon' ];
	}

	protected function register_controls() {


		$this->start_controls_section(
			'icon_list_sec', [
				'label' => esc_html__( 'Icon List', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Non Repeater
		$this->add_control(
			'widget_title', [
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
				'label_block' => true
			]
		);

		//(dfkdaslfk)

		// Repeater
		$akram = new \Elementor\Repeater();
		$akram->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);

		$akram->add_control(
			'icon', [
				'label' => esc_html__( 'Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'list', [
				'label' => esc_html__( 'Repeater List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $akram->get_controls(),
			]
		);

		$this->end_controls_section();


	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		?>


		<?php
	}
}