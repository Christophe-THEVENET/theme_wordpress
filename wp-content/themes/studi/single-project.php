<?php
// modèle de post-type
// il faut nommer le fichier single-nominformatiqueduposttype.php
// !!!!!!!!! bug WP !!!!!!!!!!!
// si bug ilfaut aller réenregistrer les permaliens ds réglages
//!!!!!!!!!!!!!!!!!!!!
get_header();
?>


<h1><?= the_title() ?></h1>
<!-- récup champ introduction du groupe de champ projet -->
<h4 class="intro"><?= esc_html(get_field('introduction')); ?></h4>
<!-- 
astuce test de la data recup avec le name de l input en argument
 var_dump(get_field('cover'));  -->
<?php if (get_field('cover')) : ?>
  <!--  !!!! cocher ds groupe de champ url pour l image -->
  <img class="image" src="<?php the_field('cover'); ?>" />
<?php endif; ?>

<br>
<br>
<br>
<br>
<br>
<h3 style="color:green">Différence entre the_field et get_field:</h3>

<!-- !!!!!!!!!! AVEC ACF !!!!!!!!!!!!! -->
<!-- on a 2 façons de récup les champs -->
<!-- la 1ere affiche direct la data -->
<p><?= the_field('introduction') ?></p>
<!-- get_field c'est pour stocker dans une variable (pas de echo) -->
<?php get_field('introduction') ?>

<br>
<br>
<br>
<br>
<br>

<?php
// avec ACF (plugin) on cré un groupe de champs pour les projets
// a régler dans ACF:
// Règles: Montrer ce groupe quand type de publication == Proje

// idem pour la taxonomie
// a régler
// formulaire Taxonomie est égale a Client
?>

<h3 style="color:green">Afficher le contenu d'une autre page:</h3>


<?php
// ******************** afficher le contenu d'une autre page ***********
// id projet 1 = 69
// id projet 2 = 70
// id projet 3 = 72


$projectOneId = 69;
$projectTwoId = 70;


the_field('introduction', $projectOneId); ?>
<br>
<?php
the_field('introduction', $projectTwoId);






get_footer();
