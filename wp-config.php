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
define('DB_NAME', 'test_site');

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
define('AUTH_KEY',         'F+w%z2kKuUFgmQ~N:RJJ}1YuhEcF*gJa4c)}:w53DU%1}y#YR#&Pm1waD@L06J3F');
define('SECURE_AUTH_KEY',  'zA2Z@Jj@Jya?jRa#p)3*Y%}3{a_f=~|@Ob1h>]`#DSjN BB:3fz&L/!rGx7<([<c');
define('LOGGED_IN_KEY',    'aX:ArVB}H,tl=IC,[D3a0J+y3>Uyu:QBy~`q>|8Z*F{edN+E{D-bA51[YPGL{Wi@');
define('NONCE_KEY',        'uO7( (U:%@kk0bp7jxwy6U+!v3[cS&nA_HZYiiuqTgM-L+fI]INZdwmT4F?j7?!r');
define('AUTH_SALT',        'yhsR31hVkBoQwtjz5U!PlG`Zt[2T];w4~UI!eo,tbube+[Wg#3&&,D9HT5x8uUX[');
define('SECURE_AUTH_SALT', 'kcmgns/4f9*C]SGHC=ubgICvO OoGpq#5jq~7L6!PsmB!+,nmz7+(/JQRdh}pTQT');
define('LOGGED_IN_SALT',   'O&]@LDcyo!m8}3!T**Z1=y %zN&HaN4a2TB&!@GIk]nA/1y.{C7bnNLhZhF~FNt~');
define('NONCE_SALT',       'LZZm9yF%nf^XcZ*MLJhVLXHi[+ax>Mpc|SA&1AIsrnY|mL`|tLi8]#DHc(cRiD$P');

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
