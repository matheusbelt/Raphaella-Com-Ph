<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rapha');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+}*:.I__UcUIx#juXD<R3o.`a v/)aiP4aCRA|ymX#O}j O5FuqzTem^qg?4 Sh0');
define('SECURE_AUTH_KEY',  '|iIvqp&&j`{ep;n4+G^RP!={7FX+#ToX*B~,ELsNV[`$9FL-x*>}KBOEV*|W<tm=');
define('LOGGED_IN_KEY',    '0BLp-/e4ZIRyUE@m-T(f;0U7gdGiPalLk}HMuDulOaEe:}8VTm#dlV[  ;NL73~>');
define('NONCE_KEY',        '?&E@^}{}5JO1SNm%pV.AO7*RTsACE9{X]1ax[}k-Mf<0aItvo43zW?zdfu.oAiQm');
define('AUTH_SALT',        'v6HIe+~w:TSD.[Xa4|zSSnX~?(YS<XXKD15:[uVKjPXc_!n!c>YEza@teR5ok[F=');
define('SECURE_AUTH_SALT', 'fB.&1K(/@~tZB@_,j<D!]@ZMTe/m[DX6#=+PYo?QwV*U&Ly_F/e5nD7]eD[5>@W!');
define('LOGGED_IN_SALT',   'tAY~J;s8x{~P(lqAkU$r@sLxFJI}HiKL2I&o4p#(ZAEx8rW0gQGH2D?p4MmEHsUS');
define('NONCE_SALT',       '!0u{44+z/3&v%&OZBVM-Mf&d|}(L29Tn X4EshT)-Vu>3:O[$`Ayrs1rC/(hkc|O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
