<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('ALLOW_UNFILTERED_UPLOADS', true);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dijakala' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '62}^+r8Ft79^Nw~`Ac&d;!x&NdplpmWe!))]NMH]doohC,7Y]i3(h-X(]S~| gz]' );
define( 'SECURE_AUTH_KEY',  'oW{r16%{VtNwe=LFoR1HK^{D]EQUacI57*-DxeczpW.uGnB?)1nLq*Xq(`(xOiju' );
define( 'LOGGED_IN_KEY',    'PA|/l/,SbOn/#@//Xh$yDN^0:Wto>ea/f:1;qh6hAkwa_GA$D@Pz1#-ZCX6ZMQYM' );
define( 'NONCE_KEY',        '23/:$UVVzLfi[BhxW|iQX 2eo3kECja~eEx@V;UgbtXvek!>.A]gtXl=&G<[x6OH' );
define( 'AUTH_SALT',        '&FLX0l-+IRHC^d-e^dt:co&&!+ZKKueB]J||^y?|x0i`xbe. bw!_WLi(lTOI7S!' );
define( 'SECURE_AUTH_SALT', '=nBCheX`u/r9FPjg}~xvE(jwmV$ew~z3:VMR79qj5yp7kHT}vE_B%P v1)sP-.H&' );
define( 'LOGGED_IN_SALT',   '^12Ybl~VT[dIri%Fk#WYtQ7eQx,c<Q%~/-T8m`];:mxQ?_qQ[K#_uL]ciWxG#cn!' );
define( 'NONCE_SALT',       'Y)7oHiF%Ao=hU!4b6n83R!a1BPxH4t2f,^hFeXuzD,[LRq{d;#E:hsH`:T<oJaT5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wdp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
