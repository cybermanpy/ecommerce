<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wplatzi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123456');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '6M2_FNkUYFlfp`Y];t!~P/T`LYYBv@a&:Q<`IlKB|YgKCpY.?w^bpQ^Ja=;[-x|j');
define('SECURE_AUTH_KEY', 'q0`YbFQYiK^9[O$KOdB++e~jEVt+75xbM<e05s?YoO7Atx2GP*p#*cmw!@BnzDaK');
define('LOGGED_IN_KEY', 'Pvx2|zvj3o;Fb(B}>8u)W,H+IaFJ@^eRJ&IKw7k[|04{47(so`m1bunOKSZ/_m]1');
define('NONCE_KEY', 'J8}{u|fQ!gr(1>.C1I_aNwr.*<9,hVaIUMR*{42/z=Gmv=+1v0|nTDNap-!qTAYH');
define('AUTH_SALT', '5XxoTl~ZKpyygf;Tcc}pJiXC &s-<Li41A{|oO{Oe]aH*Jq,b_A+R?97M,RfgY,r');
define('SECURE_AUTH_SALT', 'Y<?G&K-+=>[ORb0_j1.@Tynt1:Y:)FHW1kC|N#!gA+!3ryH(XZ?;Ce/i<uvNbyO ');
define('LOGGED_IN_SALT', '^o5_#W*L*i.n-!q(uMv)Jo0D0J,~^T6`eIck`{vNwbX1Y/BkNaH:o9%yI};){,4b');
define('NONCE_SALT', ';U6|,L%DXq0;is/U5u^XvSNneE@H|,]J}c (7D(R{^tBu3zbwf!%]:Bk2L-&;@?q'); 

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
$base='/';
define('DOMAIN_CURRENT_SITE', 'wp.softnando.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


/* Conexion ssh para wordpress */
define('FS_METHOD', 'direct');
define('FTP_BASE', '/var/www/wp/');
define('FTP_CONTENT_DIR', 'wp-content/');
/*define('FTP_USER', 'ubuntu');
define('FTP_PASS', '(fernando2106)');
define('FTP_HOST', '54.69.335.63');
define('FTP_SSL', false); */

