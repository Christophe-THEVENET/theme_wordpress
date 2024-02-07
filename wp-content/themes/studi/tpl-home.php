<?php
/* Template Name: Modèle page d'acceuil */

// fais apparaitre ds le back-office les options modèles 

// toutes les pages qui seront réglées ds le back-off avec ce modèle de template alors tous le code ci-dessous sera éexécuté a la place de celui de la page index.php(par défaut)

// native va chercher le header.php
get_header();

?>

<p>Modèle de page: Accueil</p>

<h1><?= the_title() ?></h1>

<a href="">Bouton</a>


<?php
// native va chercher le header.php
 get_footer(); 