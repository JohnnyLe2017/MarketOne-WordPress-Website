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
define('DB_NAME', 'masteronDBn4lgd');

/** MySQL database username */
define('DB_USER', 'masteronDBn4lgd');

/** MySQL database password */
define('DB_PASSWORD', '3HYVQhbQNe');

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
define('AUTH_KEY',         'C0JC480[!zsiXPumeibTLE2XPIAE6;<+E6{.$umfi<*yqjXPInqXQIME6UIA3{.$');
define('SECURE_AUTH_KEY',  ']xum<*yqibTXPum2wohZRVOG8dRKC581[!G9:|~wohldVOphZSKD5:#~_-91]_-ph');
define('LOGGED_IN_KEY',    'w1WOG915:#~D5]_-tldFJB3},$rkngYQvkcUNFJB4YRz80>!z@vc!z@vogZRJkcVN');
define('NONCE_KEY',        'HaSLD592]_H9;#*xpiJNF80>@vn}|@vzrkcVzsgZRJCF8cVNC4}[!G4:|@wogk@!-');
define('AUTH_SALT',        '5_-txdha~xphWOH9DiaSLD2]_kcUYRJB4>NF80>}|@vcgZRJCcV!G|@wogZRskdV$');
define('SECURE_AUTH_SALT', 'KG9dWOG9:#~gYQJNF3},@^zrkcUvngYRJN47cVNB4},@C480>!zgk[VJogZRVNG80');
define('LOGGED_IN_SALT',   'YF804},JC0>!zrk[}|@vogZR;<*yqibeXLE6bTXPIA<*EIA3{.yum{^yqjbTXQun');
define('NONCE_SALT',       'miaSL92]PH9D6;#+x2].+tmqia*xqiXPHAe6;<IA2{;<*yq.$umfXPuyqjbTMA2V');

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
