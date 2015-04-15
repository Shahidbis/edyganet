<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tagna');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'm_emgBZf#/{ oA%?Fx2V<,B8R |vX6+k5O2fPW;lLv|Qh3c*>Xr|> cLawY}9;Eu');
define('SECURE_AUTH_KEY',  '8!uNmf ?edG9e;/-7*Sf_+f7Z@_9A!#0FyT+A`k2ni[y)oEV4NkoHmWC:g)!Vq@{');
define('LOGGED_IN_KEY',    'oHb^{0mX-Kf(bFVA-6G@7|%c*/9hY@4XqvV#U_ipoci;V]Mwp:)uQ,-;Z%ugU ]M');
define('NONCE_KEY',        's9gn8tG@9J8+CABWg7Ab/O4>we%!aCPRG. ZSCH_UaT:OmdDyU^CIujpfN6-(D)W');
define('AUTH_SALT',        '(7K~20z9aonIKzZ ?6j8CX4B,y9#X)b!qG&@+{8Z-m=kW@EV3/P:>a76-+gdr2xz');
define('SECURE_AUTH_SALT', 'SDpT*)xLZVt/hq~ 7#X! Y)DZzJfyG3L8:sxOsu>!VDEhMj&s29Klru^eQ6ejQ >');
define('LOGGED_IN_SALT',   '0{Z{1++pAex+.MA76d!6yO%fXlI8xl^kk#.~Q+2COR#~vM%GtK9NzesCF8p{>g.$');
define('NONCE_SALT',       '.-|h2L/nDju-]]|C|DXEX+VSl(<:Sj,55-<<<bX!Hd.>V,>crO3sS}%z`P>#=v5C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
