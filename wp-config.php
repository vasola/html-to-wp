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
define('DB_NAME', 'html_wp');

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
define('AUTH_KEY',         'dMPv=_tr3cX(u_w8.kC]Wf0{I:9I%jO!0dyR>P^2A*QJb(9^nJ*0mE{o{ 3Q,!og');
define('SECURE_AUTH_KEY',  'H)xHY@?85W]rzECK/Tw$X$V}xnoY y77Z+/2W(GMcjoFb7%xppkO szoP}..TrlU');
define('LOGGED_IN_KEY',    'jR=!_w+y|6=8h*awcgC3@QS5V7MHql<H0qeU/20w!M29=AMd>xS9Rzl duqD<S#=');
define('NONCE_KEY',        'g=VWf_4.+/djQ42+]>VYD D1`H9[-Qi;,#*?,0^_^(D[ufezCV|_>VWws^pi^:!n');
define('AUTH_SALT',        'yW*LB}xs(:9fp{NQsi%>x!Px^M*U6d!=lKK7O_u.+8Z@9>B1AFx[2rHr>?UDV>!q');
define('SECURE_AUTH_SALT', 'GW|lwEavT@yH}sNiFrfqD<_Q}MGj:y}K/uI+y<|,_/m.d3hf1=!3|[g0*BW_f4Ck');
define('LOGGED_IN_SALT',   '|`bB;hy>M0fmE2krFMXa(gX3=KDYGqL)@@(jw?=z@h2?3mjCAfO+%0JWL4b:<WXa');
define('NONCE_SALT',       'J&[}N`sbuTeX~!8=bcsey]_h,.{!du&W=bpF/LMFSsDcaz(tw~<iW2/8q^M}_:h+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
