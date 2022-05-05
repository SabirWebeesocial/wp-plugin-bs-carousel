<?php

/*
Plugin Name: WebeeUtility
Plugin URI: https://www.webeesocial.com
Description: WebeeUtility is an elementor addon which is create using method of custom plugin.
Author: SabirWebeeSocial
Author URI: https://www.webeesocial.com
*/

function register_webee_utility_widgets($widgets_manager){
    require_once(__DIR__."/Widgets/Crousel/CrouselWidget.php");

    $widgets_manager->register(new CrouselWidget);
}

add_action('elementor/widgets/register', 'register_webee_utility_widgets');