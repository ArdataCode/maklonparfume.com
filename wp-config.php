<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "websit19_mklonprfum");
/** MySQL database username */
define('DB_USER', "websit19_Maklonprfume");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024!");

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'XUrKbjvj8rIHgS2t9nKGUJCGCTCsQpSGnaGu8zbFu58bENY93M1ubfErSdYxosLR' );
define( 'SECURE_AUTH_KEY', 'fuLTmEu695Src3hBVpw7vrKaIfHwTcRy4xGWeoFdT7r9bLvTzWGiP3w68GjT43Bx' );
define( 'LOGGED_IN_KEY', 'GJuUnCyIBcBPTR8tqy3jUQ2Uqvcqsdvf3T93CqYsoejqzJTIAXIFUp69LBQNz9nc' );
define( 'NONCE_KEY', '2AUdEsyRfjcipoQbgyIFF1jemYDzGiRsUbxMqhKGvwY1U7DcsEBhgCxTfqNGxdyb' );
define( 'AUTH_SALT', 'g1ccfEABb1G7uiXMY08AzXSvzP9nm28r0fq4IStpe8ivfFpfiCmvJIxwvgcY8eB2' );
define( 'SECURE_AUTH_SALT', 'drf5h7w5ftBXSjEU0zAc8mgoM1Hyjzzx1vVnytFUH4nju7VtWTyfJzS2GwVPu3rW' );
define( 'LOGGED_IN_SALT', 'vSWicXeMdeFno43DDXTVIJayibjumotpFr0vwWYeLAqRXd6dHUz5ItGVWvJfdjIJ' );
define( 'NONCE_SALT', 'A8aHN7Frviu95i1TyYEHMPuTEUyhUoQ5hfYto8PytNmQ9oXSXQRjL75mS7NeeHma' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';