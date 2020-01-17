<?php

/*function oprofile_sc_exemple() {

    return 'Hey ! Voici un super exemple :D';
}

add_shortcode('exemple', 'oprofile_sc_exemple');

function oprofile_sc_button() {

    return '<div class="action-bar"><a href="#posts" class="action-button">En savoir plus</a></div>';
}

add_shortcode('button', 'oprofile_sc_button');

function oprofile_sc_button_twitter($atts, $btn_text = null) {

    // Je crée mon tableau d'attributs.
    // shortcode_atts me permet d'assigner une valeur par défaut à mes attributs reçu ou non dans $atts
    $attributs = shortcode_atts(
        [
            // Si le `nom` n'a pas été renseigné en attribut de shortcode,
            // la valeur `oclock_io` sera assignée
            'nom' => 'oclock_io'
        ],
        $atts
    );

    if (empty($btn_text)) {

        $btn_text = 'Mon super compte twitter';
    }

    $html = '<div class="action-bar">';
    $html .= '<a href="https://twitter.com/'.$attributs['nom'].'" target="_blank" class="action-button">';
    $html .= $btn_text;
    $html .= '</a>';
    $html .= '</div>';
    $html .= '<br />';

    return $html;
}

add_shortcode('btn_tw', 'oprofile_sc_button_twitter');