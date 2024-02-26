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
                'label' => esc_html__( 'Title Style', 'textdomain' ),
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

        $this->end_controls_section(); // End Title Style


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