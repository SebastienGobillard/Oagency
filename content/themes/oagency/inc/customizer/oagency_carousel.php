<?php

function oagency_slides($wp_customize) {

    $wp_customize->add_setting(
        'oagency_slides_active',
        [
            'default' => 'enabled'
        ]
    );

    $wp_customize->add_control(
        'oagency_slides_active',
        [
            'type' => 'radio',
            'section' => 'oagency_slides',
            'label' => "L'affichage du Carousel",
            'choices' => [
                'enabled' => 'Activer',
                'disabled' => 'Désactiver'
            ]
        ]
    );

    $wp_customize->add_setting(
        'oagency_slides_nbr_slides',
        [
            'default' => 3
        ]
    );

    $wp_customize->add_control(
        'oagency_slides_nbr_slides',
        [
            'type' => 'number',
            'section' => 'oagency_slides',
            'label' => "Nombre de slides",
            'input_attrs' => [
                'min' => 1,
                'max' => 3,
                'step' => 1
            ]
        ]
    );

    $wp_customize->add_setting(
        'oagency_slides_interval_slides',
        [
            'default' => 4000
        ]
    );

    $wp_customize->add_control(
        'oagency_slides_interval_slides',
        [
            'type' => 'number',
            'section' => 'oagency_slides',
            'label' => "Interval entre les slides &#10233; ! HS ! &#10232;",
            'input_attrs' => [
                'min' => 1,
                'max' => 9000,
                'step' => 1
            ]
        ]
    );

    $all_posts = get_posts(
        [
            'category' => 'slide'
        ]
    );
}

/*<?php 
  $interval = 4000;

  if (get_theme_mod('oagency_slides_interval_slides')) {
    $interval = get_theme_mod('oagency_slides_interval_slides');
  }
?>
<script>
  var delay = '<?php echo($interval);?>';
  $(document).ready(function(){
    $("#slider").carousel({
      interval: 100
    });
  });
</script>*/