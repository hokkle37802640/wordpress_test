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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'hokkle37802640');

/** MySQL database password */
define('DB_PASSWORD', 'looc44556');

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
define('AUTH_KEY',         '0;S/2;9xpq>?Rx0x=7Nfz)yiR!$;@-AZI!-w0,ZhDrO(`Z+$W*b9S!j<sLlA3EUJ');
define('SECURE_AUTH_KEY',  'vZR =(c8f +,pg$u4]Gw4ZCEUwA8Da21}f]3pM3)nlM+Q<%u$VV]TPj<{/`u!cp=');
define('LOGGED_IN_KEY',    'spgjW= gG Zc$y+9Ao-&N}`lw@&`XQJr[u5[ezT#cDLPJz6XEG>G~CcZ?%$!c(G.');
define('NONCE_KEY',        'qMNx2g+UF0jbq6j;[Wl4zZac&)sn:d=XX.Kk:FX%zwukA;2MCA1@yLJ-0>Ru/VY|');
define('AUTH_SALT',        'kKknyyc^SWx#w7rIp{Pf=xFkyO%n>)K;.r*7@fzxgK9E_iFcTCFbtL-.Xk}IKrhc');
define('SECURE_AUTH_SALT', 'Pl@DA~?Pnn}sKha#>vtu|Uj[xq}qV2Xh%1n}Z=t?`Urk^$z`@b3)Q$4I&u>g`DA|');
define('LOGGED_IN_SALT',   'z).J,!5Y+!dR#`x{IB35{nn5!@0$FVOXpyI4.XgOX|CsWu5V+,`rR[?i8a7HlsKB');
define('NONCE_SALT',       't{qoZ^Cu`zwj7)~4-f=|t=6Axb7eZaIy!.Jv&;ix!oQlZFq%nXbXjYuk H!CI|-L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'work1_';

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
