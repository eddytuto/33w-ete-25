<?php

/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>
<?php get_header() ?>
<!-- section hero -->
<?php
$hero_background[0] = get_theme_mod("hero_background_0");
$hero_background[1] = get_theme_mod("hero_background_1");
$hero_background[2] = get_theme_mod("hero_background_2");

?>

<section class="hero">
  <div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
  <div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
  <div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:0"></div>



  <?php get_template_part("gabarit/hero"); ?>
</section>

<!-- section populaire -->
<section class="populaire">
  <?php get_template_part("gabarit/populaire"); ?>
</section>
<?php get_footer();
