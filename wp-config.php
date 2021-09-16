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
define( 'DB_NAME', 'pizzeriaTuatara' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'carlos10221996' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'K?q@-m(]1kht{z7}>|~JfB+NSV1-r}yJ$wIA-*g[?GrXNp.]Ay`^Y}x=.Ge=0djq');
define('SECURE_AUTH_KEY',  'dv;+gL+3kbW}]yOX6-:X4`d-AUjnN]D^&zFK##oC#e`1~odUxr,N_]X:FhxcNC-b');
define('LOGGED_IN_KEY',    'fZ{s>R8dl|H)6rm8C%Bz4})3cV[+/J+M7v7y4?L$SFDpgzYy4+r,X,pR^psHu/WN');
define('NONCE_KEY',        '6-:,eyJ9?@fdmH*UVI9%i._[bwT f6TF gbO1gt8/7KT%czj2-2xE?iyJL^h:*:4');
define('AUTH_SALT',        '>A}T^[FHr>+.+<Cf4;YE+f4=tfs|-Sp$ }en;Tb-&U(OhXw< t+ a-;v#eQ@G1zA');
define('SECURE_AUTH_SALT', ' fa9+o7l=*nxUOXV.7k$]JYKh!FVXp*8e6O(ROf=}hrybT}^KbR+=f%wi9T`uTFJ');
define('LOGGED_IN_SALT',   'Qt5]&W(UZY]yk3fV0d.V+eF1v:H#Q+6*%Js%1gGj hH0x`E|l]]w#7Kc=j;yg7<D');
define('NONCE_SALT',       'ao$ <#fWYw7`Bnni`s>~AF]J9<WU?)v>rYiRWzM^A<P4l!)UUQvhNCeVj+h#(:UX');
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
