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
define('DB_NAME', 'snapshot_db');

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
define('AUTH_KEY',         ')pI8sg%&>NAy^(yyr{HC]|~W_:>|3(uZ8~G5eZ(Ci&Ro?/XB>kvK;ZIovx^9Bo].');
define('SECURE_AUTH_KEY',  '3Fo*Wha!o6wLBKqb:MlL1jI!x2x_n]Uoa58>riDZz1%:a5T B,avCB3AEO`(X86;');
define('LOGGED_IN_KEY',    'nW$WH&l?Q?G^T/UrUV3u3>rvuNF>R{[L3=;t4c)~L+}GM1xZ6ST>ygdXmB1ac.:V');
define('NONCE_KEY',        ']{B8NE{-N`qC4A.!|Gay4w=/vY@0SZK{iLj0X?U5N9YI{bT/fl2e+Vg3U,v%xcQ|');
define('AUTH_SALT',        'w<TH*wLIWh@shcB-rt6Hj23J+_Y*QxL`1Yf$/?;q&F)Dxxp-!y|X* E~e[ b{aH?');
define('SECURE_AUTH_SALT', 'S=+t*@f59%UW}C:8UUCOW dDYkKfI;AGP)EUM3 0*<5sZ6WEHw=O82}V6uda=#Zq');
define('LOGGED_IN_SALT',   '#*?9Czkt|qbCi+f2F_{.[Smq/x+`8] Tr)E2=+>%JqUg9yL-C%c}[;Lx=tZ6Kn.J');
define('NONCE_SALT',       '<(Nf0,1Fr=ucN+G/xH~ly%&^z-^~%]H[^wZ`OQ{Cy)ta/g=ZGP]e_L,pp7/.d|pV');

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
