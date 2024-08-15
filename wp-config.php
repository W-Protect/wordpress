<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'user1' );

/** Database password */
define( 'DB_PASSWORD', 'hangman1234asd' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'g7*q^D:za3=J*7MT#aoFx_G-H a?)N`xzK1E0.J)^L4g@H3;ykf.{A(,iu>gq*d:' );
define( 'SECURE_AUTH_KEY',  ')ztl(eA%rfclZ8ahN:3_gflA=W5C*+Nf1tT^h~ cUG50WLy0)=%Y8xfiPPc25)=D' );
define( 'LOGGED_IN_KEY',    '9=^Z<Cu1Nz+}o kxe@eNX^k_W~*iaQujYeMUYI}M|ZSfb|R PKDn]^%Mj1A^0 H*' );
define( 'NONCE_KEY',        '}-/^bkLJ8w6kE.Sb$;+z!};:yh`Q ?h,:[kWF<Yf`hr?Lp?_{HZXDT3$ppT@umw?' );
define( 'AUTH_SALT',        'OIvr)ruJF7yR_?Xc5!Y=e</gRz%@&L$ Bx)S(9 7<n~9G>RpGf@uwA{K{`6CU3co' );
define( 'SECURE_AUTH_SALT', 'w_9MR8.M,3>tg?tFRd:0{Uh<WGd0D:#85Bgy9`<IIJ!^=lux?8t6/DLNEExJs1d9' );
define( 'LOGGED_IN_SALT',   'oY!,Yo3y6%;Q>X_^d1.ua*e<3p,^rhKVQk%gC<f>9IOw2TV!fvzX>Gt:e).I;^iJ' );
define( 'NONCE_SALT',       'Av18`0#4wr2@YS&o~/^:8&qm!eOn*Ot3v+JLVqIf<J3{4L|H<_nMsH(DuwlHk&gA' );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
