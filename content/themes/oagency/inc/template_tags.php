<?php

/*function get_the_fa_customfield($id = null) {

    if (is_null($id)) {

        $id = get_the_ID();
    }

    $custom_field_value = get_post_meta($id, 'font-awesome', true);

    if (empty($custom_field_value)) {

        $custom_field_value = 'fa-internet-explorer';
    }

    return '<i class="grid__item__icon fa '.$custom_field_value.'" aria-hidden="true"></i>';
}

function the_fa_customfield($id = null) {

    echo get_the_fa_customfield($id);
}

function get_the_acf_customfield() {

    $custom_field_value = get_field('icone_de_competence');

    return '<i class="grid__item__icon fa '.$custom_field_value.'" aria-hidden="true"></i>';
}

function the_acf_customfield() {

    echo get_the_acf_customfield();
}