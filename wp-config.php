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
define( 'DB_NAME', 'bdmonsite' );

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
define( 'AUTH_KEY',         'u2dRD!N[4kjqsQ_gzWOe@B{k2cDxuNw`F!ikJ ,%,lAg, `LE2Bf0Mb&q-f;EVD*' );
define( 'SECURE_AUTH_KEY',  'QaLttMX@Y0<JOg=1bo<1J.6nP&P43m]&j?QF+r[nr]_ZiPNm$?LDx_,HRw={7(1:' );
define( 'LOGGED_IN_KEY',    '<|];z|-HqZwC.1.0bS;~Zqx_<o(jWj)H_+56dCO8YD :#yheYhc1KvYJ)W2<~S c' );
define( 'NONCE_KEY',        '.Qn[`]NFHR&&/Q}dJh_1:J?)5]ycXms]PQ$@J%fio%-BhI`0S`Uh_Cd/fV>KM4(v' );
define( 'AUTH_SALT',        'EWl9g#_6u{]m>w%dqH~O;>w/,L^B,XA,rUEL-zgfhpj]B{/sj21Y=$M7?riS`NLx' );
define( 'SECURE_AUTH_SALT', 'pulZ.vf)8 Ui|*ae@m`m>oJS#]9v7ayZk| riKIdtJY|*pal&sT5k4]u-UYl3 a,' );
define( 'LOGGED_IN_SALT',   '[47U*/HJO:PzlrBA,?u`)lJrmdxGN>c.7NZZKW65Z_E4!-fJxX@^Eqa.IOq0g$yz' );
define( 'NONCE_SALT',       'M/azBXfa(n 0(BauM}vpre6XC-+ZR+5bfb~Rm//kdsb(7#I-pI(Vx,0uE[XOFt1f' );

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
