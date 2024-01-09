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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'EU]X%ojW%I>UE__WPpI=ESVmQ.HU[Sge}A9:U&S5)3tDxW$Ph9i3Gx,(&JK-]l0_' );
define( 'SECURE_AUTH_KEY',  '5C 2BCW*)c;0kqh!Hd+&*Nk[qP{>G7j* k(wl?%@{iHoxg^I^gR*%NL`}AhlUr=u' );
define( 'LOGGED_IN_KEY',    ')n!#_5f=xdWOaz~swXhogS#f!kvj9.ZZY^wi~XRztj`S5P*;mxn[5*WbP:?4)~YH' );
define( 'NONCE_KEY',        '+3^wC:3ke|hIVZmKw#fG5Y@vLw] mATHKMg]^OH+*D#?zJR4`W;~ktDVz`so*]dR' );
define( 'AUTH_SALT',        'GJ?OAbPEQg%TB`ACx&B@lG]ef/2r?diJQ[_b9:ni(Llxr1Yr#%2vngu+)e%_k%+O' );
define( 'SECURE_AUTH_SALT', '[>L.gE!;49/ni/5SA55;)325!3!x+u^j,u6 z$+s(rj~ZfXQ_2dSH/GQb&Jr}R~?' );
define( 'LOGGED_IN_SALT',   '?+?Kx_=m]GvvR&ZhF6c6+DusuP3/012~gAFH{]#XtNs{t&Y|L[Y*!)vck5|o50_y' );
define( 'NONCE_SALT',       'G!j@6ECPb4JN@n*Y&zkVbNQ*)o>H/f=u^m(7]6{+%h UaQYWmX8W|F546YOqSq<q' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
