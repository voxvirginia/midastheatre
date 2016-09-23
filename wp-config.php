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
define('DB_NAME', 'midastheatre');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':/(~xHRY27(=`DF!dP+G2w06Q$P{~QkEdMA8j%|1=/=yfgJAob^[&1fC#;TeIosF');
define('SECURE_AUTH_KEY',  '!no`rRg-%*+,%lzEqnK]@,W%h!sc`[spr:*jV-{AOmz-rP:auI(|$|*Yr9c)pxUv');
define('LOGGED_IN_KEY',    'y7)H[Oc3s[gFXQSzm9.wWudWbkK`l^L0*+b<DX=n!M{5Z=c$3_]%|,<P5/4<{r U');
define('NONCE_KEY',        'LudsBWSD87{.x9_iW|lEJ&/dAB-+1v VgGn<[CjLGsg*~R7K0zju;;=&/(O1T6=`');
define('AUTH_SALT',        'Kw(^}xU)dQl{s;<oWK 1r,/}1MA?J _#z5q5&nl[,0VB`(8d)Ixo158fSC7 ^[o0');
define('SECURE_AUTH_SALT', '~4%}$qwbeP:VY81dDE^~b--7-z+uw7 w0~wAycNq5Oi4C,_Qqr>Xf.cC6ZcJgO_l');
define('LOGGED_IN_SALT',   '%1,Uc6M6B;g9qFG*D5W&sY#Q3=y,u1E*zCHVbYkVoxuRxI:l4wjj*PM@Iei}ZKb4');
define('NONCE_SALT',       'KhC%;zK#0L44;.D]XDm8d>0hEOisk]NaS~/|h;r~yt(A^}]PNWCGtNfIM9I6xZt1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'midastheatre_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
