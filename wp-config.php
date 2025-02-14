<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo.roofly.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '990614' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AVG=%4Z`YQHoE%@(oL[0qD?(;?&!zey%0+4CS[f 3hFx$1vVh1lsJMd3E?l#v/[2' );
define( 'SECURE_AUTH_KEY',  'S)1{#yJpoGIUbS[EGw6GFt4u9^||vN<C9`E^IGFli+NB0Htg4+49>)L.SO:Cbd~X' );
define( 'LOGGED_IN_KEY',    'mQm^mb+%q4h3C$K3`56W53xigSMl4fq@3?5Od_xzvu3;fNblsXo}=LN=}5WhI!.i' );
define( 'NONCE_KEY',        'spiu=5L!n$FJptTn%*GKIGE_`GIW2S=iWgCkGe#u]BUd*Z@T=/4;50PB4YplWjcv' );
define( 'AUTH_SALT',        'y|}$4Ln%5k~/(dp|[yHpnImEsa/||,NLhcT0arp!8DT7)prfs.D.Lh%$g]YD<A3!' );
define( 'SECURE_AUTH_SALT', 'PIhOKHk%9TIps&_W%-YBHLn(nq):sr:qy7]]Z@e!,K|P(ww8,7AdtW]nWdIa$>FS' );
define( 'LOGGED_IN_SALT',   '&X),#2aZ*h=pfzfvPX:RQf0c1$t%^Dw^^xRII!:i^QKo,I(alH>A;Xp3l(gr#ne/' );
define( 'NONCE_SALT',       'lUe3gSE,*LJ `jh1SJjOf,0txHvE+qCTP6.o6,S2)<JWsf?OmngrkYrOTV,=>*BY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DUPLICATOR_AUTH_KEY', '~Pn3}@f&7`Eqa0qS|D6$*_sUb1BPwB GNUz:66rAxiW)t}ojni] {^bl#@q7`!,&' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
