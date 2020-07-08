<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'woocommerce' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!%[<VWlXOG:%]Gud7;{nLcIZTC KM$*%?Lr[|,Z0Xi9w=lH`p_NOqv5+pJyBZwS-' );
define( 'SECURE_AUTH_KEY',  'DWM83|@EMDBY?)x5fUfT@+>:EfHF5aEjelB0mS#!B{*7=/7^Ug%_^@R&l>~C 1>#' );
define( 'LOGGED_IN_KEY',    '[Pc4^c_FR)yfpqz|7?y~qnh,>y1]&eeug=Cag,Ft6/0]*~#06Jkg5Zi5HSz#E}5R' );
define( 'NONCE_KEY',        '<(-D[oU;@`iD^pvKAH@#F?,rDMl~mHq9fs9h<iUCl3!~f|6YwC:t6hBL&I9@<<=L' );
define( 'AUTH_SALT',        'zE~/S60-T6]z0K =J,j`D_M-{KBt}Sh||. l%MtLr61yrqjwQylMVyk)]J9f=_pQ' );
define( 'SECURE_AUTH_SALT', '7%KJ7@^M0nR*BrX0i.O Ev=i_Zk~uw[#j[-a;g>H@TuN%h1}9D`mS*9P!!tO2kl[' );
define( 'LOGGED_IN_SALT',   '#ow]Xf0.q%`hUllM16Fz[P{2Ary,;Sr}Ssrtw[ t.k[7dW4dqp2|zv=]NoHKpgtx' );
define( 'NONCE_SALT',       'a!>CoP~<5oLD58EE t`2n%OkZysDSy( M/}yxrUJs3H>s0zUv4rS4wnJ%N<7|m71' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
