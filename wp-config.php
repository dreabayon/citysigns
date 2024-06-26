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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'citysigns' );

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
define( 'AUTH_KEY',         '*F[^e8so+IuR;V+/u&aqg[Z)X-DzF+]4C+U PfI]<^A:h uxD{dfh)*3fIvC;!iF' );
define( 'SECURE_AUTH_KEY',  'hxF|/2=A-[F2[},@VerA7!h-qgBy3_UReG$P!rz)9.h#@1u+:tvR*Pd?lDQ9c>V.' );
define( 'LOGGED_IN_KEY',    'vE..drMg+/z}Fhw.c<TuKauPmucV?iTeRjld^-#a@L>7lCI@ICvQGxwAoj1r90Ca' );
define( 'NONCE_KEY',        '?g)SesO.xtp6f{-1`1N/eN8DT8=/dYkJY*dIP2ww[^ei(fqDkol@ oQW3h9ABdu.' );
define( 'AUTH_SALT',        'R8]S*0;==9+_~G@X2xeM)MrMXxYu9?P,!1P[DCXY$Wip#h7k+1[>+N]FPi}w-x=|' );
define( 'SECURE_AUTH_SALT', '1Qnjm)>!taCb.gO&# i<6{[i!k/PS9Tth95g1)j]Nig|b;XRDu]w5}]-2{D@tX*C' );
define( 'LOGGED_IN_SALT',   'sO$Vv:u$7!VXz1HcWyXphS=MP `@d-Vl;lj8+!D_[]/y|h8mnG:#<f#57+g]Jk@E' );
define( 'NONCE_SALT',       '*(:C:pm;|ZMcc^gOdY< 75a0Md9QwS3LJ+0Ux.kYO-kwetW3o+eH0T:FVotSB)5P' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
