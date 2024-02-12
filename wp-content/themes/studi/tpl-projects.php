<?php
/* Template Name: Modèle page projets */
get_header();
?>

<main>
    <h1><?= the_title() ?></h1>

    <p><?= the_field('intro') ?></p>


    <!-- pour récupérer tous les projets on utilise get_posts()  avec des parametres voir doc WP -->
    <pre>
    <?php

    $nbProjetsToShow = get_field('nb_posts_to_show');

    var_dump($nbProjetsToShow);
    /* on parse car on recoit un string  avec get_field()*/
    $nbProjetsToShow = intval($nbProjetsToShow);
// récup le status des projets a afficher 
    $stateOfProjetcts = get_field('type_project');

    var_dump($stateOfProjetcts);

    // !!! astuce ds acf en rétglant le mini a -1 si on veut récup tous les posts on passe -1 en param
    var_dump($nbProjetsToShow);

    $params =
        [
            'post_type' => 'project',
            // a l aide d un champ ACF on peut indiquer ds le back combien on veut de posts 
            'numberposts' =>  $nbProjetsToShow,
            'order' => 'ASC',
            'orderby' => 'post_title',
            'meta_key'=>'state',
            'meta_value'=> $stateOfProjetcts,
        ];

    $allProjects = get_posts($params);
    print_r($allProjects);

    // on peut aussi filtrer avec les fonctions de ACF
    

    ?>
    </pre>
</main>

<?php
get_footer();
