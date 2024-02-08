<?php
/* Template Name: Modèle page d'acceuil */

// fais apparaitre ds le back-office les options modèles 

// toutes les pages qui seront réglées ds le back-off avec ce modèle de template alors tous le code ci-dessous sera éexécuté a la place de celui de la page index.php(par défaut)

// native va chercher le header.php

//ds ACF masquer l'éditeur de contenu
get_header();
?>
<main>
    <!-- ****************** Acceuil ************* -->
    <section>
        <!-- 
     on peut avec acf choisir ce qu on veut récupérer d'une image : tout, url, id voir doc
      var_dump(get_field('cover')) 
      -->
        <h1><?= the_title() ?></h1>
        <?php
        /*  recup image avec array pour avoir le alt */
        $image = get_field('cover');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <!-- 
        on peut avec acf ajouter automatiquement des tags paragraphes quand le client entre ces données en sautant des lignes  -->
        <article><?= the_field('intro') ?></article>

        <!-- ************ A propos ************* -->

        <section>
            <h2>A propos de moi</h2>
            <article>
                <p><?= the_field('text_about') ?></p>
            </article>
            <?php $link = get_field('link') ?>
            <?php $url = $link['url'] ?>
            <?php $title = $link['title'] ?>
            <?php $target = $link['target'] ?>
            <a href="<?= $url ?>" target="<?= $target ?>"><?= $title ?>
            </a>
        </section>

        <!-- ********* Mes projets ************ -->

        <section>
            <!-- !!!!! ds ACF pour le type de champs des projets selectionner relation -->

            <h2>Mes projets</h2>
            <p><?php the_field('text_projects') ?></p>

            <?php $projects = get_field('projects') ?>
            <pre>
  <!-- !!!!! ds ACF select format de retour id -->
                <?= print_r($projects) ?>
            </pre>


            <ul>
                <?php for ($i = 0; $i < count($projects); $i++) : ?>
                    <li>
                        <h3><?= get_the_title($projects[$i]) ?></h3>
                        <img src="<?php echo get_field('cover', $projects[$i]) ?>" alt="" />
                    </li>
                <?php endfor  ?>
            </ul>

        </section>




    </section>
</main>
<?php
// native va chercher le header.php
get_footer();
