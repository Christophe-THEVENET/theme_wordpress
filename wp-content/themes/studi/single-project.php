<p>Custom Post-Type : Projet</p>

<?php
// modèle de post-type
// il faut nommer le fichier single-nominformatiqueduposttype.php
// !!!!!!!!! bug WP !!!!!!!!!!!
// si bug ilfaut aller réenregistrer les permaliens ds réglages
//!!!!!!!!!!!!!!!!!!!!
?>


<h1><?= the_title() ?></h1>


<?php
// avec ACF (plugin) on cré un groupe de champs pour les projets
// a régler dans ACF:
// Règles: Montrer ce groupe quand type de publication == Proje

// idem pour la taxonomie
// a régler 
// formulaire Taxonomie  est égale a Client

