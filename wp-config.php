<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'barebellss');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'phpmyadmin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@(<UkO.LyG[us~?Dk{2Xe|usgFCcZ*,D:^t-.Hlwn?1dQyTEU/<%h%O+)$ec)EIU');
define('SECURE_AUTH_KEY',  '|BH^fybY)qm;mF)#/~BAR{Z}%.dPo*}bB~1v(.TD1g|(eCCuvYmQ(]3bNR?ft}2l');
define('LOGGED_IN_KEY',    '$THZ,1;9[{88wa[@PsSH;<rr$8m1uo7GVSRa<$4=bbEI~p>sF:F.:`M&!rj-_@%g');
define('NONCE_KEY',        'Z/o]+~Ftn&5(zwx%Fy}/-Lwg];o}vw MVnd{evyg6uTeLGCMLeG.@#PasBGjj8W<');
define('AUTH_SALT',        '|.RBi5t*=fEW@17|-`kgvb^Q&UNZn$r`rp gKhGxl~c;vJeDJWuKO<jCbOQH_tf9');
define('SECURE_AUTH_SALT', 's)z_@tt|!U?&]9j:0k%0X}k;yct^g3R)9-;:e!iH4q:(|18tXCG v^j@Ci%G.5!b');
define('LOGGED_IN_SALT',   'u2vu/t<3fxiyAz@eT5)f1}A^6  nkr5$1^br <d!R=96|42~lkVV.N,@V,E)Q6E ');
define('NONCE_SALT',       'Ce7t&@_V&_@ spM^vosFjh*Pg6>b{^:)5bkn-;rO]&X~tV*V?XQcd|Fmzm0{1.4X');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

define('WP_CACHE', 'true');
define('WP_DEBUG', true);
// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);
// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
