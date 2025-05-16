<?php get_header() ?>
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
  <?php if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <h1><?php the_title(); ?></h1>
  <?php the_content();
    }
  } ?>
</section>
<?php get_footer();
