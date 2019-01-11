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
define('DB_NAME', 'developer');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'LnmC4R?{J 8bp]^)c60tcs*:vM1&FHq`V{lr2)~A:Q-,xS3[Gy$KS.G5w9#1Z/UD');
define('SECURE_AUTH_KEY', 'PIoH>nKm^_4O?,Z!bx*iQ<p5|pi=r<aYPSc. `D_UZscaeP1/DnVL`d/,#^:wvm0');
define('LOGGED_IN_KEY', 'tMWu`-`RUo,4eu?<HvT^{Oq2o%pft`l>K:pY2=g`0<M 8[fKjya0&;3>#2NW}_Y1');
define('NONCE_KEY', '<6-I`C?s`_o9P^D }j/cXKnOMZcTPda,7tx|J8*!]I]:4R@GJ6fQ=Vhly.bbF!iC');
define('AUTH_SALT', ' E$)LzXE+wAL78g,S6pQ2uuzmhTuBypQ]js%sOOp~,.ddq7Q9Wunu|QC(xN~`UVQ');
define('SECURE_AUTH_SALT', '@ZhUZ5BFwljS)L$d>YNAtxW5+fBZ1fcOK-Bq:)WV6s&N;yC${TFoB3x(G<XuL~{A');
define('LOGGED_IN_SALT', 'W#phZ[4@+$h1j VkAib`{0IZs.l)~h{[[W)B1a1@$ixn5PSaS`v<LE,T8=l(D+Xv');
define('NONCE_SALT', 'ik{CZ^Y7(q::dSYCN6SR|+|> eW2hwtMT[9-tJ:Z;+Ko?Ub=eT|L[A^1o|3&zj?=');

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

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

