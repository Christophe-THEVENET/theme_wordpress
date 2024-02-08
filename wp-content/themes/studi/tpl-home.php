<?php
/* Template Name: Modèle page d'acceuil */

// fais apparaitre ds le back-office les options modèles 

// toutes les pages qui seront réglées ds le back-off avec ce modèle de template alors tous le code ci-dessous sera éexécuté a la place de celui de la page index.php(par défaut)

// native va chercher le header.php

//ds ACF masquer l'éditeur de contenu
get_header();
?>
<main>
  <section>
    <!-- 
     on peut avec acf choisir ce qu on veut récupérer d'une image : tout, url, id voir doc
      var_dump(get_field('cover')) 
      -->

    <?php
    /*  recup image avec array pour avoir le alt */
    $image = get_field('cover');
    if (!empty($image)) : ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <h1><?= the_title() ?></h1>
    <!-- 
     on peut avec acf ajouter automatiquement des tags paragraphes quand le client entre ces données en sautant des lignes  -->
    <article><?= the_field('intro') ?></article>
  </section>
</main>
<?php
// native va chercher le header.php
get_footer();
