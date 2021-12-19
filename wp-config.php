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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eatdanco' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F[iB*?| G;-?/NK[?Q 9JL,CN=#A)({3./: JI0-)bCcRI&k@A!D p%gS+yb3lFf' );
define( 'SECURE_AUTH_KEY',  'r1x^X&GoV&oy N R}{%OksV{6/UkS8JWoHQ,,]^Ezri0(9KBHyX@(_3@5yw6Rxd3' );
define( 'LOGGED_IN_KEY',    '0qX<KB-Cb600`+nVb7c_k*2(=Jf6tK#A.q8>&@>f,0WqO&=@df8.n8Y.DE$u-l>1' );
define( 'NONCE_KEY',        'J%5IUM4mbQ)eG,cAVb#CSAde<;0-&Iae(/G00$cf^*<gK7VYqRFZ5zw|g/W&Q/SD' );
define( 'AUTH_SALT',        '^WIN2FiS-zn++Ut85keVzL-(8l@]S),Ubc-Y_TgMyL06Ik>-<`u^o6WQ<bhCY6*E' );
define( 'SECURE_AUTH_SALT', 'Fx9p/$>>3D,Qt!P!1{PpBBsu8-ES*~WRs,)ez!34 ^Uxen7>qb0T!O]WHRMfL+it' );
define( 'LOGGED_IN_SALT',   'icgYj,sc2&CifiBC(SNL6qAnp+*3-ii6s-b>fI0`o{{;*Hpni+P2#NB}MXq`+0CL' );
define( 'NONCE_SALT',       '!Yd<,i=L,^2tz%A>izI.cE+t@`X5X>[JG)SJlxW6?tpX92qGhL3n,vyY%^J(/cP,' );

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
