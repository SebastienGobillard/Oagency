<?php

function oagency_footer($wp_customize) {

    $wp_customize->add_setting(
        'oagency_footer_active',
        [
            'default' => 'enabled'
        ]
    );

    $wp_customize->add_control(
        'oagency_footer_active',
        [
            'type' => 'radio',
            'section' => 'oagency_footer',
            'label' => "L'affichage du footer",
            'choices' => [
                'enabled' => 'Activer',
                'disabled' => 'Désactiver'
            ]
        ]
    );

}