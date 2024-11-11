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
define( 'DB_NAME', 'letswatch' );

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
define( 'AUTH_KEY',         '{7)(N>3/&Ia/DAr8=rytu:(8~.JTxVpn75x.hP!ty;G=3VT-aYQiV@Bu$Sh-CuIr' );
define( 'SECURE_AUTH_KEY',  '(W$3hyrz>e;UB<Uav};bAFg3&~ituKOMiGUnV^*9/H}f8[jPDnP:A1v>}{U&rP>[' );
define( 'LOGGED_IN_KEY',    'L<*y|Y_**;wj^fNcA$w7[`Q+@m^[u,nP),Ke^EM3*[wS{H#a&7ijFt+7u<(heDBZ' );
define( 'NONCE_KEY',        '_3jK^n*jbwqCPHjUJmk[@u_|9Z,JFvo[)M<9={ie)&^sWe6YY>JlI7GEK08:&Yb?' );
define( 'AUTH_SALT',        '|nl,=&@$1bEn#{y@i,K}5Sp6A4>Q^yi7udj8.`e!vMf iErG=}2IY1Z|7.5piQ_m' );
define( 'SECURE_AUTH_SALT', 'x>UMwq.w)@ZiY4xc.wE;/zu=Rw0i|3 7$dT}0(@l[5-no)CGL)AwZYQCx]JLDcFv' );
define( 'LOGGED_IN_SALT',   'sazg.}u/1<}#9EF&j1Gcu,In|qOI(/TgsoZtQ!r2Ggu&u#vJ?wX@~7i%uh$Qi+P8' );
define( 'NONCE_SALT',       'em_|J4@?kc&2s]S;SD[Cc[db#~84u9%hZg&|zn6M Psrq+$c`.mXPKba9<1+ qk`' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
