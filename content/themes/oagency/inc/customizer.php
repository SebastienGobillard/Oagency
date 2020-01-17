<?php

if (!function_exists('oagency_customize_register')) {

    require('customizer/oagency_carousel.php');
    require('customizer/oagency_articles.php');
    require('customizer/oagency_banner.php');
    require('customizer/oagency_contacts.php');
    require('customizer/oagency_footer.php');

    function oagency_customize_register($wp_customize) {

        $wp_customize->add_panel(
            'oagency_theme_panel',
            [
                // Titre du panel (affiché)
                'title' => 'oAgency ',
                // Description du panel (click sur (?) en haut)
                'description' => 'oAgency Panel - Gestion du thème',
                // Emplacement
                'priority' => 1
            ]
        );

        $wp_customize->add_section(
            'oagency_slides',
            [
                'title' => "Carousel",
                'panel' => 'oagency_theme_panel'
            ]
        );
        oagency_slides($wp_customize);

        $wp_customize->add_section(
            'oagency_articles',
            [
                'title' => "Articles",
                'panel' => 'oagency_theme_panel'
            ]
        );
        oagency_articles($wp_customize);

        $wp_customize->add_section(
            'oagency_banner',
            [
                'title' => "Banner",
                'panel' => 'oagency_theme_panel'
            ]
        );
        oagency_banner($wp_customize);

        $wp_customize->add_section(
            'oagency_contacts',
            [
                'title' => "Contacts",
                'panel' => 'oagency_theme_panel'
            ]
        );
        oagency_contacts($wp_customize);

        $wp_customize->add_section(
            'oagency_footer',
            [
                'title' => "Footer",
                'panel' => 'oagency_theme_panel'
            ]
        );
        oagency_footer($wp_customize);

    }
}

add_action('customize_register', 'oagency_customize_register');