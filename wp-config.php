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
define( 'DB_NAME', 'Charitizes' );

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
define( 'AUTH_KEY',         '&~<mh|A,qe9%XbXHD6i!b/dXSyo=960A)O@FIqAg~V#P6Db1W,8hy<.J3SlrtTo~' );
define( 'SECURE_AUTH_KEY',  '{ZUD6IoCE}[:)K?8e^+Ku!nbP]KyxzfAJJbMe@yCv$+z|vN8:u*S<-SRZP}7>_i|' );
define( 'LOGGED_IN_KEY',    'P`$7]D#W=i<hp-F+96bLu@VU:)qr+byNM?gW.4vE5*Yr2)DT=:ZX&,!C9M1UO-se' );
define( 'NONCE_KEY',        '.^uA /D{}Ji:c#x$[N!E25Txh$JKi3&<)eo#1 Tm]9Ji<{~{7i<-7(Qu0>}@mI%K' );
define( 'AUTH_SALT',        'F:t*e$d[4}g.tE^NUM38QE%m;dhJ5$kd1F1bTcgy{ X, 9D^0bEm#E1fZcPMbaTq' );
define( 'SECURE_AUTH_SALT', ']%ZO{e[XSYuY?liaNb_~%jSbGbweh;I(&a:V>b>aQTE!$#fm2nr=}X<w k?8V{Qj' );
define( 'LOGGED_IN_SALT',   'Nseu8-CVB.dY,e7 XJ)POMt!O]ua!t0/wXw7,HU0S1(068QUx=kB*93~xc|<N{LK' );
define( 'NONCE_SALT',       '9<ZL~g6_nKBY^aA)4F-)Co|f{^MboiP&1=jU]AE[7gn3.ah7!^*^5|=OR.)MI2{)' );

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
