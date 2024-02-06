<?php

// on ajoute ici des fonctionnalitées perso
// ca rajoute dans le back-office de WP
// un onglet du label de la posttype
// et on gère comme

// créer un posttype
function create_custom_posttype_project()
{
  //native créer des custom post-type
  register_post_type(
    'races',
    array(
      // name posttype in menu au pluriel
      'label' => 'Courses',
      'description' => 'Toutes les Grand-Prix de formule 1',
      // page dédiée visible ds back-office
      'public' => true,
    )
  );
}

// a quel moment on ajoute register_posttype ds wordpress ici au début
add_action('init', 'create_custom_posttype_project');
