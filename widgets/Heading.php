<?php
class Elementor_Addons_Heading extends \Elementor\Widget_Base {

    public function get_name() {
        return 'elementor_addons_heading';//
    }

    public function get_title() {
        return esc_html__( 'Heading (Jewel)', 'elementor-addon' );
    }

    public function get_icon() {
        return 'eicon-heading';
    }

    public function get_categories() {
        return [ 'jewel-khan', 'akram' ];
    }

    public function get_keywords() {
        return [ 'text', 'content' ];
    }

    protected function register_controls() {

        // Content Tab Start
        $this->start_controls_section(
            'section_title', [
                'label' => esc_html__( 'Title Section', 'elementor-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Default title', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'separator' => 'before'
            ]
        );

        $this->add_control(
            'title_link', [
                'label' => esc_html__( 'Title Link', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section(); // Content Tab End


        //=================== Start Title Style ===============//
        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__( 'Title', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color', [
                'label' => esc_html__( 'Title Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title a' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'selector' => '{{WRAPPER}} .title a',
            ]
        );


        //====== Tabs
        $this->start_controls_tabs(
            'style_title_tabs'
        );

        // Tab Normal
        $this->start_controls_tab(
            'style_normal_tab', [
                'label' => esc_html__( 'Normal', 'textdomain' ),
            ]
        );

        $this->add_control(
            'normal_text_color', [
                'label' => esc_html__( 'Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title a' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'normal_bg_color', [
                'label' => esc_html__( 'Background Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'selector' => '{{WRAPPER}} .title a',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'normal_box_shadow',
                'selector' => '{{WRAPPER}} .title a',
            ]
        );

        $this->end_controls_tab();//Tab Normal

        // Tab Hover
        $this->start_controls_tab(
            'style_hover_tab', [
                'label' => esc_html__( 'Hover', 'textdomain' ),
            ]
        );

        $this->add_control(
            'hover_text_color', [
                'label' => esc_html__( 'Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();//Tab Hover


        // Tab Active
        $this->start_controls_tab(
            'style_active_tab', [
                'label' => esc_html__( 'Active', 'textdomain' ),
            ]
        );

        $this->end_controls_tab();//End Tab Active


        $this->end_controls_tabs();//End Tabs


        //=== Padding
        $this->add_responsive_control(
            'padding', [
                'label' => esc_html__( 'Padding', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'default' => [
                    'top' => 2,
                    'right' => 0,
                    'bottom' => 2,
                    'left' => 0,
                    'unit' => 'em',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'before'
            ]
        );


        $this->end_controls_section(); // End Title Style


        //=================== Start Test Style ===============//
        $this->start_controls_section(
            'style_section_2',
            [
                'label' => esc_html__( 'Another Section', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        //=== Padding
        $this->add_responsive_control(
            'padding_2', [
                'label' => esc_html__( 'Padding', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'default' => [
                    'top' => 2,
                    'right' => 0,
                    'bottom' => 2,
                    'left' => 0,
                    'unit' => 'em',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'before'
            ]
        );

        $this->end_controls_section(); //Test Section


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        ?>

        <h1 class="title">
            <a href="<?php echo $settings['title_link']['url'] ?>">
                <?php echo $settings['title'] ?>
            </a>
        </h1>

        <?php
    }
}