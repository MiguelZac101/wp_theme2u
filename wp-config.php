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
define('DB_NAME', 'wp_theme2u');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '992921996');

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
define('AUTH_KEY', '=jHbR/KbsW/ jgb^1M#{vbY%pTDn`-N}s$3yDE[~@qs FN*FIbU~Sq;}<8Ec;sqB');
define('SECURE_AUTH_KEY', 'le)Exr(!ERZ<__~b%ms^d)S(0nX?an6.g!IGwhGk5p_@z!Xn;_&xVJvVTKAd%&07');
define('LOGGED_IN_KEY', 'iGX0]s]qXUV$AZz()PA#Oy2hz8PH8%*0uP5{qP1xoR #jViCx6}Qwy/$<o<82+OS');
define('NONCE_KEY', 'rcQA7?^k<X,^9Tr8THdiD:QV^wMoWfA3/P-0*w_|3V}}DTDt!k:&Cve!BiLFgwL>');
define('AUTH_SALT', 'SlS0TpkdW^Df$j-tR@[EZTm1rBj]q)8<}P;cyIVct23@ Ad6Tj1i[z+w9V*Kwe<-');
define('SECURE_AUTH_SALT', 'D6<OP8g.)@a*u}4:pG{&VjQWj,x%UrGL[kmwJZcLQ$>h`S.6GKzYkQBf|Q8|6K9[');
define('LOGGED_IN_SALT', ':.Wv`rD)Cx/A(G6Qj1m<zCpw)iL^Y2bT]HaiWnMLie>n~YNx:CkR==.^$dp3xqwv');
define('NONCE_SALT', ']fM/G?Tu3z!*7}#:Gi?9<fc0hQra!sX,LI~gq<l>;Wtne_or$o`O04B7R`O%Ypif');

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

