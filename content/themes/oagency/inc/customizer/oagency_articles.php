<?php

function oagency_articles($wp_customize) {

    $wp_customize->add_setting(
        'oagency_articles_active',
        [
            'default' => 'enabled'
        ]
    );

    $wp_customize->add_control(
        'oagency_articles_active',
        [
            'type' => 'radio',
            'section' => 'oagency_articles',
            'label' => "L'affichage des articles",
            'choices' => [
                'enabled' => 'Activer',
                'disabled' => 'Désactiver'
            ]
        ]
    );

    $wp_customize->add_setting(
        'oagency_articles_nbr_articles',
        [
            'default' => 6
        ]
    );

    $wp_customize->add_control(
        'oagency_articles_nbr_articles',
        [
            'type' => 'number',
            'section' => 'oagency_articles',
            'label' => "Nombre d'articles",
            'input_attrs' => [
                'min' => 1,
                'max' => 6,
                'step' => 1
            ]
        ]
    );

    $wp_customize->add_setting(
        'oagency_articles_info_category',
        [
            'default' => 'news'
        ]
    );

    $categories = get_categories();

    $array_choices = [];
    foreach ($categories as $category) {
        $array_choices[$category->term_id] = $category->name;
    };

    $wp_customize->add_control(
        'oagency_articles_info_category',
        [
            'type' => 'select',
            'section' => 'oagency_articles',
            'label' => "Categories des articles &#10233; ! HS ! &#10232; ",
            'choices' => $array_choices
        ]
    );

    $all_posts = get_posts(
        [
            'category' => 'news'
        ]
    );
}