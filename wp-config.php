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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         't?Hqa/mEd2I.flWP+5L73>e9/DVt.4EP^k./f.D4v^l&[h_}u8<m L:XV5c|D8P<');
define('SECURE_AUTH_KEY',  'Betpgm`wT@t6dz={tdz!E8UiCZZPh@eSaQ)A=p{;s_-D*U^kNR|dRpJ.ZTaD0rj3');
define('LOGGED_IN_KEY',    'NClhixgjw!5syQXYTETzD)) ,o+())(bLn7]);d,Vwk0`HabJeItYNHY$0OgPSsk');
define('NONCE_KEY',        '{NKBdt>V1emv7Qw:v!Im%RS%-ac*,cSqD3|QoLcq0O</?zB187H@_a)rk=EM=#Sk');
define('AUTH_SALT',        'z,4hFIx>db]2d/K{S|0Gl~8_q|ZB7`DZ,X` I=@/ZT@N=N|0iosep9OVY;V=TBBO');
define('SECURE_AUTH_SALT', '8B88/EHdE&M0.2[h3T@E Or1]d;k}!Oc.@7QgE<P6U?LF<=WPT=Uo,.C>ETKIwE2');
define('LOGGED_IN_SALT',   'Fx/p U& Nva,Nmgr.]S.Kprjx<s?gE%Dk<~K,S]mMl>U[`BH=}Nb)m/i l9 P=UR');
define('NONCE_SALT',       '1~^,O1U3E{ |x=&Da?SQ@6F$s$^sJSLpLI9G_373<q$H?eV0zTfJU&Kv2Ek$;2Am');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');