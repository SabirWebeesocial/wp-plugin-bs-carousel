<?php

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class CrouselWidget extends Widget_Base {
    public function get_name() {
        return 'Crousel_Widget';
    }

    public function get_title() {
        return esc_html__('Webee Crousel', 'elementor-addon');
    }

    public function get_icon() {
        return 'eicon-post-slider';
    }

    public function get_categories() {
        return ['basic'];
    }

    public function get_keywords() {
        return ['webee', 'crousel'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'gallery',
            [
                'label' => esc_html__('Add Images', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::GALLERY,
            ]
        );
        $this->end_controls_section();
    }


    // protected function render() {
    //     return include_once(__DIR__ . "/CrouselView.php");
    // }

    protected function render() {
        $settings = $this->get_settings_for_display();
        include_once(__DIR__."/CrouselView.php");
    }
}
