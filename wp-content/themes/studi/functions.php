<?php

// on ajoute ici des fonctionnalitées perso
// ca rajoute dans le back-office de WP
// un onglet du label de la posttype
// et on gère comme

// créer un custom posttype : Courses
function create_custom_posttype_course()
{
  //native créer des custom post-type
  register_post_type(
    // slug
    'races',
    array(
      // name posttype in menu au pluriel
      'label' => 'Courses',
      'description' => 'Toutes les Grand-Prix de formule 1',
      // page dédiée url permalien
      // on met a false si il s'agit de données pas ds une page dédiée
      'public' => true,
      'menu_position' => 5,
      // visible ds back-office
      'show_ui' => true,
    )
  );
}
// hook (crochet = morceau de code qui vient s'accrocher)
// a quel moment on ajoute register_posttype ds wordpress ici au début
add_action('init', 'create_custom_posttype_course');
/*
Création de la catégorie associée à mon custom post-type
*/
function create_taxonomy_races()
{
  // natif
  register_taxonomy(
    //nom
    'tax_races_championship',
    // posttype  de la taxonomie
    'races',
    array(
      'labels' => array(
        'name' => 'Championnats',
        'singular_name' => 'Championnat'


      ),
      'description' => 'Saison',
      // page dédiée au visiteur via url (page de toutes les courses de tel année)
      'public' => false,
      // !!! si public false il faut modifier show_ui a true
      'show_ui' => true,
      // hiérarchie a true on est en catégories
      // hiérarchie afalse on est en étiquettes
      'hierarchical' => true,

    )
  );
}

add_action('init', 'create_taxonomy_races');

// ****************** portfolio *****************

//  créer post-type des projets du portfolio 
// ajoute projets ds BO comme articles
function create_custom_posttype_project()
{

  $labels = array(
    // Le nom au pluriel
    'name'                => _x('Projets', 'Post Type General Name'),
    // Le nom au singulier
    'singular_name'       => _x('Projet', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name'           => __('Projets réalisés'),
    // Les différents libellés de l'administration
    'all_items'           => __('Tous les projets'),
    'view_item'           => __('Voir les projets'),
    'add_new_item'        => __('Ajouter un nouveau projet'),
    'add_new'             => __('Ajouter'),
    'edit_item'           => __('Editer le projet'),
    'update_item'         => __('Modifier le projet'),
    'search_items'        => __('Rechercher un projet'),
    'not_found'           => __('Non trouvée'),
    'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
  );

  $args = array(
    'label'               => __('Projets'),
    'description'         => __('Tous sur lesprojets'),
    'labels'              => $labels,
    'menu_icon'           => 'dashicons-admin-site',
    'menu_position' => 5,
    // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
    'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
    /* 
		* Différentes options supplémentaires
		*/
    'show_in_rest' => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
    'rewrite'        => array('slug' => 'projets'),

  );

  register_post_type('projects', $args);


  /* register_post_type(
    // nom informatique du post-type
    'projects',

    array(
      'label' => 'Projets réalisés',
      'singular_name' => 'TOtos',
      'all_items' => 'Tous les projets',
      'public' => true,
      'menu_position' => 5,
    )
  ); */
}

add_action('init', 'create_custom_posttype_project');

// créer les catégories de projets (front, full, design, etc...)
function create_taxo_project()
{

  // taxo pour les projets
  register_taxonomy(
    // nom informatique de la taxonomie
    'tax_project_type',
    // posttype  de la taxonomie
    'projects',
    array(
      'labels' => array(
        'name' => 'Type de projet',
        'singular_name' => 'Projet'
      ),
      'description' => 'Projets du portfolio',
      // page dédiée au visiteur via url (page de toutes les projets par catégories)
      'public' => true,
      // !!! si public false il faut modifier show_ui a true
      'show_ui' => true,
      // hiérarchie a true on est en catégories
      // hiérarchie afalse on est en étiquettes
      'hierarchical' => true,

    )
  );
  // taxo pour les clients des projets
  register_taxonomy(
    // nom informatique de la taxonomie
    'tax_project_clients',
    // posttype  de la taxonomie
    'projects',
    array(
      'labels' => array(
        'name' => 'CLients des projets',
        'singular_name' => 'Client'
      ),
      'description' => 'Clients des projets',
      // page dédiée au visiteur via url (page de toutes les projets par catégories)
      'public' => true,
      // !!! si public false il faut modifier show_ui a true
      'show_ui' => true,
      // hiérarchie a true on est en catégories
      // hiérarchie afalse on est en étiquettes
      'hierarchical' => true,

    )
  );
};



add_action('init', 'create_taxo_project');
