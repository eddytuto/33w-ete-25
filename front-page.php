<?php

/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>

<?php get_header() ?>
<h1>trace seulement à retirer -------------- Front-page.php -----------</h1>
<section class="hero">
  <div class="hero__contenu">
    <h1 class="hero__titre">Club de voyage</h1>
    <p class="hero__description">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur
      incidunt quas eius totam veniam, molestiae officiis cupiditate ut
      possimus tempore veritatis illum dignissimos, pariatur atque nulla
      architecto a natus voluptatibus!
    </p>
  </div>
</section>
<section class="populaire">
  <div class="conteneur global">
    <?php if (have_posts()) {
      while (have_posts()) {
        /* affiche l'image « mise en avant » miniature */
        the_post();
    ?>
        <?php
        if (in_category('galerie')) {
          echo "<article class='conteneur__galerie'>";
          the_content();
          echo "</article>";
        } else {  ?>

          <article class="conteneur__carte">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h2><?php the_title(); ?></h2>
          <?php
          $lien = "<a href=" . get_permalink() . ">Suite</a>";
          echo '<p>' . wp_trim_words(get_the_excerpt(), 10, $lien) . '</p>';
        } ?>
          </article>
      <?php }
    } ?>
  </div>
</section>
<?php get_footer();
