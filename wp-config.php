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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'exampledb');

/** MySQL database username */
define( 'DB_USER', 'exampleuser');

/** MySQL database password */
define( 'DB_PASSWORD', 'examplepass');

/** MySQL hostname */
define( 'DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'faae1fe7d2f952bac7ad7b83326e25d6950ee41c');
define( 'SECURE_AUTH_KEY',  'c7459f1d9aa475cb09e9d696b4e1753eccad7ad1');
define( 'LOGGED_IN_KEY',    '50df92f4cb143977de2e8372cb5dec0b5b5c82de');
define( 'NONCE_KEY',        '5224dd25a6427dd3719804ae8bda2e8bb29b629e');
define( 'AUTH_SALT',        'd3224b1391e886b9cc09b57ccb9c9378c60cb779');
define( 'SECURE_AUTH_SALT', '0b851f8d26d808e65b214fb127a1dd632e430266');
define( 'LOGGED_IN_SALT',   'b275dbaeef0af92499eedbe679d341235d0e07c3');
define( 'NONCE_SALT',       '34c81462435d60fafd19d68e1b1e5d009d0b4cc2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
/*if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}*/
define('FORCE_SSL_LOGIN', false);
define('FORCE_SSL_ADMIN', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

$_SERVER['REQUEST_URI'] = str_replace("/wp-admin/", "/blog/wp-admin/",  $_SERVER['REQUEST_URI']);
define('WP_HOME','http://localhost/blog/');
define('WP_SITEURL','http://localhost/blog/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
//$_SERVER['REQUEST_URI'] = str_replace("/wp-admin/", "/blog/wp-admin/",  $_SERVER['REQUEST_URI']);


//define('WP_HOME','http://localhost/blog/');

//define('WP_SITEURL','http://localhost/blog/');

/**
if ( $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' )

{

    $_SERVER['HTTPS']       = 'on';

    $_SERVER['SERVER_PORT'] = 443;

}
*/
