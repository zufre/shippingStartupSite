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
define('DB_NAME', 'shipping');

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
define('AUTH_KEY',         '9,v!{hHefhbn>u@{~0-Hi$s=Pnk2A%8@?p` sUX,n/&A5i9&KTA?Wm+}_yv#- -D');
define('SECURE_AUTH_KEY',  'Lat#K^ [B`*/LUIOcV#b@XAjSGgS6Ro2k1Kg`u}9ANnSP)W!pmgCo_07m,0iZxcg');
define('LOGGED_IN_KEY',    '3R<T3SFvNhn<~`pH-ISXzF>se]?[WF3]PX7B`Mz&j$Yk6IP,V`$c%2GDtJ0Z=}Sc');
define('NONCE_KEY',        'MS%rmeC e reMD^=)$Jy(-dolI:Q.wJyHuG^S8+jH4s%Ax(J6&0823g_;<~Hv0pn');
define('AUTH_SALT',        '^dT/_rO%@Il97}:UBs[UttIv3Ur:>^nz=36~-%?V8+,,7JUcZM&>Zrjel.CX{{%K');
define('SECURE_AUTH_SALT', 'Y8OS^wy@uigOsv,PURd%fx5kmev*P]^uQi9Gfi^F-uVVmWP:-D+c>tz*3a/(.+o>');
define('LOGGED_IN_SALT',   'Gp~hHe9h8EY;TM>wnn1XFv:.cvQO9JJ{Fz9uf[dyf^C?!&6Rc{q/6eJninb ^@As');
define('NONCE_SALT',       '^G9:!tV,HLXWZP^tLUAeJL=3aeT5D]*q_|W1PHu5[1BUL&Zt36gFyROf.&;[6k[1');

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
