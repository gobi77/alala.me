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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'gushter77');

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
define('AUTH_KEY',         'sjwyk,iVMU[G8&W3d9d*Z`81>!XNLpn(aiy[J7bv4#H/ajLjS}ynZl@]xNFiYtJU');
define('SECURE_AUTH_KEY',  'e9`;tFYTS(s^Gl^WS*>stkx6Vx,, }}0SP9j^qmhBF<Jx)rC0lN~.p+zayPY,m_$');
define('LOGGED_IN_KEY',    'f}w&^sre&}cy2ruR!# *pSYlp#IvTE}gJ*A]PJg~Zu]P0hMMU8hXElA(^l=7Dn=!');
define('NONCE_KEY',        '7KZ^UuI7>oSr9*iL:b(SDw.T~$:kXVg]MCm*ewpx8um ~~&[+~P7,Ut3hdNT<Cqu');
define('AUTH_SALT',        '$)kWx^A.>dpF}[UVA4wQ^l-lIv> A}9X+*)}&`<.{uk6N/KrgWc3&-mgFm9LDwU@');
define('SECURE_AUTH_SALT', 'N)zU/rBMe2LsYm62|rA/z)%.^Q%xg!F($,H?1KQ^Zo3Uu~s:]{|s5B^MoQ%mzWP/');
define('LOGGED_IN_SALT',   '8^AGg nBd$O5[8H!@!AnrWReK@U)r,uA!;t0rRcy-DBy(OJ_q+jmLe(oskY5Ym.L');
define('NONCE_SALT',       'R8Xm{k^.rFOT7S=%?5ViPHs=mui_2F d4@v,aJM$M!4^>n%fH&GnEMb1=~=0V[jV');

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
