<section class="footer">

<?php
  $display_contacts = true;

  if (get_theme_mod('oagency_contacts_active') == 'disabled') {
    $display_contacts = false;
  }

  if ($display_contacts) {

    $contacts_style = '';

    if (get_theme_mod('oagency_contacts_bg_color')):
      $contacts_style = 'style="background-color:'.get_theme_mod('oagency_contacts_bg_color').'"';
    endif;
?>

  <div class="contact" <?= $contacts_style; ?>>
    <div class="contact__list">
      <h3>oAgency</h3>
      <p>158 Alléede la Garde<br>75001 Paris</p>
      <p>01 23 45 67 89</p>
    </div>
    <div class="contact__list">
      <h3>Pages</h3>
      <ul>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Blog</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Contactez-nous</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Equipe</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Homepage</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Page de redirection</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Partenaires</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Projets</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Sample Page</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>truc</a></li>
      </ul>
    </div>
    <div class="contact__list">
      <h3>Équipe</h3>
      <ul>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Equipe</a></li>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Partenaires</a></li>
      </ul>
    </div>
    <div class="contact__list">
      <h3>Archives</h3>
      <ul>
        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Avril 2017</a></li>
      </ul>
    </div>
  </div>

<?php
  }
?>
<?php
  $display_footer = true;

  if (get_theme_mod('oagency_footer_active') == 'disabled') {
    $display_footer = false;
  }

  if ($display_footer) { 
?>

  <div class="contact-link">
    <button type="button" class="btn btn-light">Contactez-nous</button>
    <button type="button" class="btn btn-light">Sunlight</button>
  </div>
</section>

<?php
  }
?>

<?php wp_footer(); ?>

</body></main></html>

