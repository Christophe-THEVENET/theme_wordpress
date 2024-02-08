<p>Custom Post-Type : Projet</p>

<?php
// modèle de post-type
// il faut nommer le fichier single-nominformatiqueduposttype.php
// !!!!!!!!! bug WP !!!!!!!!!!!
// si bug ilfaut aller réenregistrer les permaliens ds réglages
//!!!!!!!!!!!!!!!!!!!!
get_header();
?>


<h1><?= the_title() ?></h1>
<p>Je travaille sur ma page dédiée aux projets</p>
<!-- récup champ introduction du groupe de champ projet -->
<h3>Mon introduction:</h3>
<h4 class="intro"><?= esc_html(get_field('introduction')); ?></h2>
  <!-- 
astuce test de la data recup avec le name de l input en argument
 var_dump(get_field('cover'));  -->


  <?php if (get_field('cover')) : ?>
    <img class="image" src="<?php the_field('cover'); ?>" />
  <?php endif; ?>

  <?php
  // avec ACF (plugin) on cré un groupe de champs pour les projets
  // a régler dans ACF:
  // Règles: Montrer ce groupe quand type de publication == Proje

  // idem pour la taxonomie
  // a régler
  // formulaire Taxonomie est égale a Client

  get_footer();
