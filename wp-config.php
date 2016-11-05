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
define('DB_NAME', 'alala');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*-7SZ0%x7M3 Plp2zC2kJ(u:JG~>pw=wx:h,v(e,-xqmQySO)To0iHWi<Q5To3tV');
define('SECURE_AUTH_KEY',  'qjD]iw=bvI_SBwU}PL2~C2&Ycp/y?b| ?an_|-Q:jwEw|J.zc7?bDj(rwh?_G|js');
define('LOGGED_IN_KEY',    '[?L}Ugf8vWs3ylxR?VBc2C6hkcqnG-[s?UAr?Cg|@ Z^JxA[p8T`CoR6,<G#1v}9');
define('NONCE_KEY',        '?ckjOrZP,z#u1Iu`gP(Ecm`<h/IbiIS#-&QLvD<E[2t3lWo;;hW.`aC)S~vGUNm&');
define('AUTH_SALT',        '^?/QI[i~GT]y-[L+I+UWc!7r5G$P0VT:}Gf^9DsRG,!2]x4340m(NQq=[*VoKS$7');
define('SECURE_AUTH_SALT', '0y(asuV)Vc8bi=P1atSFGDeddgD%^hnGUy6xnu5tV^eiTmRBK_FXtOkI+2;Wz~_+');
define('LOGGED_IN_SALT',   '/99J<#+v$>Q$|m05f_4H[*MiE&k6hg{8%uTi];*$SjQZPN>AI:&w!.+>8moiah^e');
define('NONCE_SALT',       'pd0ui)if%U;c.B^_&n0M+,b|NzRC*d8aH:Uh>N]Tb2iLG+`&6|oA]C|G PdBK5Ap');

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
