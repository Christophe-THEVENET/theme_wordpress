<?php

// on ajoute ici des fonctionnalitées perso
// ca rajoute dans le back-office de WP
// un onglet du label de la posttype

//  créer post-type des projets du portfolio 
// ajoute projets ds Back-office comme articles
function create_custom_posttype_project()
{
  $labels = array(
    'label' => 'Projets',
    // Le nom au pluriel
    'name' => _x('Projets', 'Post Type General Name'),
    // Le nom au singulier
    'singular_name' => _x('Projet', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name' => __('Projets réalisés'),
    // Les différents libellés de l'administration
    'all_items' => __('Tous les projets'),
    'view_item' => __('Voir les projets'),
    'add_new_item' => __('Ajouter un nouveau projet'),
    'add_new' => __('Ajouter'),
    'edit_item' => __('Editer le projet'),
    'update_item' => __('Modifier le projet'),
    'search_items' => __('Rechercher un projet'),
    'not_found' => __('Non trouvée'),
    'not_found_in_trash' => __('Non trouvée dans la corbeille'),
  );
  $args = array(
    'label'  => __('Projets'),
    'description' => __('Tous sur les projets'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-admin-site',
    'menu_position' => 5,
    // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
    /*  'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',), */
    /* 
		* Différentes options supplémentaires
		*/
    'show_in_rest' => true,
    'hierarchical'  => false,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'projets'),
  );
  register_post_type('project', $args);
}
// hook (crochet = morceau de code qui vient s'accrocher)
// a quel moment on ajoute register_posttype ds wordpress ici au début
add_action('init', 'create_custom_posttype_project');

// créer les catégories de projets (front, full, design, etc...)
function create_taxo_project()
{

  // taxo pour les types de projets
  register_taxonomy(
    // nom informatique de la taxonomie
    'tax_project_type',
    // posttype  de la taxonomie
    'project',
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
    'project',
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

// ***************** fonction charge le css ***************
function load_styles()
{ {
    // Ajoute le fichier my-style.css depuis le répertoire du thème
    wp_enqueue_style(
      'main',
      get_template_directory_uri() . '/css/my-style.css',
        array(),
      '1.0',
      'all' 
    );
  }
}
// !! ne pas oublier de lancer les métadata dans le header (wp_head())
add_action('wp_enqueue_scripts', 'load_styles');

