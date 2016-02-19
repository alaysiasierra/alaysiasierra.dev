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
define('DB_NAME', 'alaysiasDBzfix4');

/** MySQL database username */
define('DB_USER', 'alaysiasDBzfix4');

/** MySQL database password */
define('DB_PASSWORD', 'lHeqh0I9hT');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'M*jTEA{$mXaK51_pZKG]-lSD:]-lP9#xieO9*paLH2_pa|wsdN4|wZVG1~oZVG[wh');
define('SECURE_AUTH_KEY',  '$UF0$nYU8>vgRN7,vYVF}@oYVFI2;*qbH2;yjPA{+yiM3.^qbM3.yjUE{$n;xioVG');
define('LOGGED_IN_KEY',    '48k^mXI{$yjUA{$fcM3,vfbM0@nYUF$zE;*mWHD;*iTA{+XH{$yiTE{+fQM6<yf');
define('NONCE_KEY',        'E#D+Du6qAiA[V[K_K-lSC9[-hK51_paWG14,^rcJ3,^kVB}@zkU4|!scN4|vkVG:@');
define('AUTH_SALT',        'wK5|paG1_tdZKQ7>zvfQ7!rnYJ4^rcRC}@kUFB}wgR8[zkgmXE{+mXE<yjTQA<yb');
define('SECURE_AUTH_SALT', '>UFL62.taL62+iTEA{xiMI3.qbLI2yjTQA<yjflWG:~plWG#xhdO9#waWH2~paWH#');
define('LOGGED_IN_SALT',   '#WLN8[|wgN84~oVGC:@kOK5|sdOK4-lhSC[-wh}@nUFB}$jNJ4!rcYJ0zkgR8>zvg');
define('NONCE_SALT',       'yQ{$jTEA,vbM73,rUQB}yjUQBD;*+lWD;~teP6#xteP;*qmXH;*ifPA<yiePwhSO');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
