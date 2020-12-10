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
define( 'DB_NAME', 'wordpress2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress2' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '12345' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'JDT^^YU`dJe8Q?Bxu!wg79:,-!(UN}nNKbQ]=i0$I.uF=z*h)G:pl8J-xs8BDhre' );
define( 'SECURE_AUTH_KEY',  'SG<{8aU9qY)&)=Jm:;tCQSjV0[A0wwF%E#rP3CG(pPOcdr2Q/$Epop`KdeH$C@Te' );
define( 'LOGGED_IN_KEY',    '*BKx+_mr[jY{C$zp6Q{7%;tQrkYh*^[qv<1|a2m`1DQS%vYUGB$Q h-B{@2bM@h.' );
define( 'NONCE_KEY',        'Cqmt65g]2dkwM]+Jz`x %{u*opz@zmc0lzZ0zjd`DB&SnXq;-dX[iN_%bHvv$SG:' );
define( 'AUTH_SALT',        'q#4.1/FXgQ6.N#2ln(ec<aiwKFsFM342D`_:t!)J@U]jV&(vM;Ifm+Q*;T_1!=qG' );
define( 'SECURE_AUTH_SALT', 'dI^feB6+/sfXKSb+!jI&wE@,#cPJSUwXhr_P1iwMm7X9Rv|oVEY~{iUU_XWq*vA[' );
define( 'LOGGED_IN_SALT',   '6G#[nZ[1f4.3LN4u-2(#ZF7y%/Dd/M3iu^3QZ#s;YRTDM>Y~?k29B3~X4y@L6(dN' );
define( 'NONCE_SALT',       '{m4:+T]!kZtQiXL//sE[q&:$EvJPY7:h+%=6uRmD-I6L!_HIz?B-R?c*3X!Pazxr' );
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
