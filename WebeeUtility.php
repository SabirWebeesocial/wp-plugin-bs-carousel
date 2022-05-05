<?php

/*
Plugin Name: BS Crousel
Plugin URI: https://www.webeesocial.com
Description: BS-Crousel is an elementor addon which is create using method of custom plugin.
Author: SabirWebeeSocial
Author URI: https://www.webeesocial.com
*/

function register_webee_utility_widgets($widgets_manager){
    require_once(__DIR__."/Widgets/Carousel/CarouselWidget.php");

    $widgets_manager->register(new CarouselWidget);
}

add_action('elementor/widgets/register', 'register_webee_utility_widgets');