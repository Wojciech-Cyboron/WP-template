<?php

if (!function_exists('mynewtheme_setup')) :
    function mynewtheme_setup()
    {

        register_nav_menus(
            [
                'primary_nav' => __('Primary menu', 'mynewtheme_translate'),
                'secondary_nav' => __('Second menu', 'mynewtheme_translate'),
                'extra_nav' => __('Extra menu', 'mynewtheme_translate'),
            ]
        );
    }
endif;

add_action('after_setup_theme', 'mynewtheme_setup');
