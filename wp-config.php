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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'fathin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Teamoliya123-' );

/** MySQL hostname */
define( 'DB_HOST', '10.0.0.121' );

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

define('AUTH_KEY',         '! A|$6,WO7SC_%SO.-Q<rN,^+iEJVv+xNfSMc+-2(c#]@`E.vW$4+4N~G`0VkGct');
define('SECURE_AUTH_KEY',  'otuR_%.I^<x||t}P/KLac88+]0c,(w`~+Z5$03{_y{X%S$&UdA|U?dHiKk/b2,J`');
define('LOGGED_IN_KEY',    '?t&NB~[bL7.lHZfiw}> 9A+8EAzNpdBY^+kZa0Cd<m+=Zc~Moba1`$re&4x!,l4Q');
define('NONCE_KEY',        'XHXIR~v,ELCp9w&+_%l4-s~8DrZzJtT5TU.qwI45EU}So>[fo?cvY+3ueCER,=+G');
define('AUTH_SALT',        ',~ho.$!/:O/l~#h?0<d5dK7TS+OS^+P;w<F8;c8BMPk*+f-:`Zv6!8i~F^zovCE6');
define('SECURE_AUTH_SALT', 'kiNuraQ|Ct1mCUInJ~nMTzCWqMJ{+3-.`zfrtSZ00G&osGG8JdtS.N4-JA.ZP=C+');
define('LOGGED_IN_SALT',   'cB|N^o#eGc0$$rZ8?N|?dO(F=85c.(moP*#U5pbDH5LBC(#RD!Ms`3+ ^E^s}zvY');
define('NONCE_SALT',       ';cbY#`+|@MW4vf*GX}ctQ9yh[FXIqiWNxLb$&Yv+kRLc-edUq#;~5>NDxP{!qmmx');

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
