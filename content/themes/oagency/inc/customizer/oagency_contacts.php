<?php

function oagency_contacts($wp_customize) {

    $wp_customize->add_setting(
        'oagency_contacts_active',
        [
            'default' => 'enabled'
        ]
    );

    $wp_customize->add_control(
        'oagency_contacts_active',
        [
            'type' => 'radio',
            'section' => 'oagency_contacts',
            'label' => "L'affichage des contacts",
            'choices' => [
                'enabled' => 'Activer',
                'disabled' => 'Désactiver'
            ]
        ]
    );

    $wp_customize->add_setting(
        'oagency_contacts_bg_color',
        [
            'default' => '#cccccc'
        ]
    );

    $wp_customize->add_control(
        'oagency_contacts_bg_color',
        [
            'type' => 'color',
            'section' => 'oagency_contacts',
            'label' => 'Couleur de fond',
        ]
    );

}