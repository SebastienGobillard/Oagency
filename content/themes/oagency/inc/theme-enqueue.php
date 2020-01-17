<?php

if (!function_exists('oagency_scripts')):

    function oagency_scripts() {

        wp_enqueue_style(
            'oagency_app_css',
            get_theme_file_uri('public/css/app.css'),
            ['oagency_vendor_css'],
            '1.0.0'
        );

        wp_enqueue_style(
            'oagency_vendor_css',
            get_theme_file_uri('public/css/vendor.css'),
            [],
            '1.0.0'
        );

        wp_enqueue_script(
            'oagency_app_js',
            get_theme_file_uri('public/js/app.js'),
            ['oagency_vendor_js'],
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'oagency_vendor_js',
            get_theme_file_uri('public/js/vendor.js'),
            [],
            '1.0.0',
            true
        );
    }

endif;

add_action('wp_enqueue_scripts', 'oagency_scripts');