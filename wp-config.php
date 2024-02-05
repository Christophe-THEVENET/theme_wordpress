<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'theme_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EUE!U~`!fb}9Vk7/VUKU9*Q,N:AcNDYjS]5%z)]fRAefZLBLf_m>T(<rh3IebQne' );
define( 'SECURE_AUTH_KEY',  'r0&,^_0ej#Cn|oN8%@b-zPBC: VkkB1:+?/mGK/5mfM(clD}w4WTezxmVhX/Kkw1' );
define( 'LOGGED_IN_KEY',    '{6JXUi?`X .XsAVgI~MH}<F(fpsul<[7ct:i,PhK_hGX<G94< [q~quq=*-nq&8r' );
define( 'NONCE_KEY',        '?b@oH4dv|nh6|cV/j dEepKqdPGCeB;NT{9RM*8ZBk$*[$<u06C8TWJuTR_am7r=' );
define( 'AUTH_SALT',        ' <mqqj5T:Ba#YFTQY07Tp^[Pf9xY-Niok*lvc}$X/GyVh%8S}CFc<X7l.S`50z&g' );
define( 'SECURE_AUTH_SALT', 'Zx,Ny5*nZVS8uR0DwY9bE<|eGmqf#.tV-o24THLs(</igSVM=Cai!B*cUE[DP,K0' );
define( 'LOGGED_IN_SALT',   '|WL,n(gORu; >a}qvaXh_5ERa$P,*q^#=4_ZSeDAu^.RVi);U6ZhY0cv4v5X@$aW' );
define( 'NONCE_SALT',       'GY,r!-9;TkEAW$^7).~Rq=X@gzXc;hlbs1C/mn(!`B1|bxF!YB9icYr5o| Ql^6Z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'theme_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
