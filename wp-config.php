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
define('DB_NAME', 'wp_graciela');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'miguel');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'miguel');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY', 'Ff,%cR0<(F#iX?MY<RvCo(n*`)I8@j<y9#gQC-$6Zgawb:0djO(WFMcWH|i%?4<8');
define('SECURE_AUTH_KEY', 'Kwtkea^O/dp000TEl#dp+pHl6:Eh)hpbjffFwb4cidQM+|T3]l2wqRd{C^chJ9i}');
define('LOGGED_IN_KEY', 's}i2:A%: pQL6`[p!L^#v|u13T3=1%X_h<_CG5|(!A@6@0j.wSY?c]US68Mmi8Qn');
define('NONCE_KEY', 'NQqIdUceS!~(21Arjx3$jK<2*}OA`/T~`_<Jtr13E%%+w=!b+o[$}$o7KH)&ZB,j');
define('AUTH_SALT', '!fml?+P?Iq35?R`tJ^nYs.Tn/2hoq:[[hrM&d5`MBbT^lJXl$C7^?-NC6#>.JJ<V');
define('SECURE_AUTH_SALT', '+~a_E)iJZP9K={t`s]B)LOm?xe{p]7nA*,[tb@aYQ#Q/-KD!k^D[YkZXY,P&Woo?');
define('LOGGED_IN_SALT', 'I^[t9g~TN:ac%=@Ix*B:`:j!U;/zN`gZl[`U94NzV+19F2isCr+h}Zw8u> N?)9T');
define('NONCE_SALT', 'xzTMb!nT}7Q=jhsFJTddBUm(<r/h?$ `dUu~}r]GCt<Hj-TI9nvN<,ce>TC#`}3P');

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

