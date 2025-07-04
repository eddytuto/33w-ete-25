<?php

/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>
<?php get_header() ?>
<!-- section hero -->
<?php $hero_background = get_theme_mod("hero_background"); ?>

<section class="hero" style="background-image: url('<?= $hero_background ?>');">
  <?php get_template_part("gabarit/hero"); ?>
</section>
<!-- section populaire -->
<section class="populaire">
  <?php get_template_part("gabarit/populaire"); ?>
</section>
<?php get_footer();
