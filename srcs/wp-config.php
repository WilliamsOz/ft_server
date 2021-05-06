<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress_user' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'h24fo+f&cTIIVY5,:*d,)CsNU/I6|t|pyW+.tX=y1W64@I71nlxFv:,N@Y:Y-YgB');
define('SECURE_AUTH_KEY',  '+h`&<+PV|lQLK%z-?`23W|~[.,Y3ht7.B;@q3|KZCbHaH:^DZ|#yHZTkQ qWxWq ');
define('LOGGED_IN_KEY',    'j?9$|0D,{~a9@.?I2ywsq)j<lkObOn#mntw,G|:9}5,LD|O1Rn|-90OnWqD^*4=,');
define('NONCE_KEY',        'KT[t3$-)BLWdSK(JVE;(Fqs|wCmDE=^]?|_oC!d]F#,tL4frY37H7;AA~,Vx+:W[');
define('AUTH_SALT',        'Yt<ExW=&o1]HVR2K#YSj{OQ.zSmPRPYl? Q7JSjsdSfg.DK+Bv>m*W%w> j)|jS;');
define('SECURE_AUTH_SALT', '!CeuowKiDR,,jhpJ+KV4a}N+Z`,bsfoMk0+U6Y]tj52guR#+Ec~Q*tQ@3lbVU ku');
define('LOGGED_IN_SALT',   'NUmanr0e|S-O,bL0E8|Tw$9Q3V=NGDXThg|XDrWZ>L-ZHt)D-!olSvv ]cm/b/30');
define('NONCE_SALT',       'V96e.e]a5fWUOoT/MzTV&w~i<@&OYS/CG(9)2e]K]U#Vi1mh`HE!nvveyk5D{GW|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
