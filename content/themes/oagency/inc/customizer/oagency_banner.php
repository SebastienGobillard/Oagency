<?php

function oagency_banner($wp_customize) {

    $wp_customize->add_setting(
        'oagency_banner_active',
        [
            'default' => 'enabled'
        ]
    );

    $wp_customize->add_control(
        'oagency_banner_active',
        [
            'type' => 'radio',
            'section' => 'oagency_banner',
            'label' => "L'affichage des banner",
            'choices' => [
                'enabled' => 'Activer',
                'disabled' => 'Désactiver'
            ]
        ]
    );

    $all_posts = get_posts(
        [
            'category' => 'banner'
        ]
    );
}