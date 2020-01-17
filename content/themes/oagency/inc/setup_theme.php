<?php

if (!function_exists('oprofile_setup')) {

    function oprofile_setup() {

        // Ajout de la gestion du titre automatique
        add_theme_support('title-tag');

        // Ajout de la gestion des images de mise en avant
        add_theme_support('post-thumbnails');

        register_nav_menus([
            'main' => 'Menu affiché avec le bouton en haut à gauche',
            'social' => 'Menu des réseaux sociaux'
        ]);
    }
}

add_action('after_setup_theme', 'oprofile_setup');