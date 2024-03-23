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
define( 'DB_NAME', 'portofolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mP|wd#mxsCEP0l<~fLrjo{VV.cgGu>X1jpap##du!2Q9kn{1.:*PveF]Dm=3;[VB' );
define( 'SECURE_AUTH_KEY',  '_#}p{(#RM4dWItBG1>S3j<7W`cHjCa;yj{?/ua-5T6x$F4 7wrkO)o+8)QS4%/w9' );
define( 'LOGGED_IN_KEY',    'ZRpZ8qzY|G0@iksdDy_Z57M*oFt0cDvKoQw<vjd_C-^`aoR=D>4)8#=OkL+of*wl' );
define( 'NONCE_KEY',        '7~b4Bd.|Q89K{sAy!Hjd=P9x>/ho6],n5Cd;Q$R:x81^cNhr[N/T4H*yOxt%]YYa' );
define( 'AUTH_SALT',        'j%4 @ptAjet@0)~?EE;Y F%4ncr](EzKbt -6imu:=>$_}J!gIqJ7C RE{+0u16G' );
define( 'SECURE_AUTH_SALT', 'X[?d9:ON!>0l;K>l>]6h?VP6EC6?hcM1@*;Z$H6j6ssgybToEtCD+^BpWtTQ]Lm1' );
define( 'LOGGED_IN_SALT',   ')-9]aU0W$V2tuL.M2#5%G]xY5c]ccLo9kZv4%ji2D)W$c%78%&.mpxN8j:Ue5yJo' );
define( 'NONCE_SALT',       'XVzI`c``<N05;o8DJV2UH~zq4I.#Pv!pl|V5U^s34$[5Sk4?t.<9b#sm%Na8(tg]' );

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
