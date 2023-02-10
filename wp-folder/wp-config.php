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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_db' );

/** Database username */
define( 'DB_USER', 'me' );

/** Database password */
define( 'DB_PASSWORD', 'localhost' );

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
define( 'AUTH_KEY',         't]<!I5g#zjmH[m]5*?9/]qPPb}t3#Co2VA0aQwGE{1,t( kOYGKIR/^ T=tdTqMz' );
define( 'SECURE_AUTH_KEY',  '2ewwf=O1Nh}RBpI%)T$?.E2(-<Zc$89~TlR+]3[@X(Eb$^jfu>IIp@oklXCy4i35' );
define( 'LOGGED_IN_KEY',    '=]?4G8TGiCF52:3-iEcN5(vw,qynZBUz8];+8@ kBlh{/Vr[U`T&)k&Hd~}O{a_s' );
define( 'NONCE_KEY',        '[FNKf.txC]md)#cV5pEu.JA--1b/0~;ngCvn,[bbCe@n-basbQdp/.a2gDHs8yyc' );
define( 'AUTH_SALT',        '=do>9avXQ]<!%Vweo?J5GZJbg6s@g+(e4YRtpy#^@p-z$lpi&Frxx4l^PxH7?r_9' );
define( 'SECURE_AUTH_SALT', '0>=|/M0$6~K2%+QI(C!*m!3L3-[C.guiCXjH5}TbMlf0mCFZt5B,e(G?y;u;+%ZM' );
define( 'LOGGED_IN_SALT',   '=Y,V!/X*GU/+J>Lrq|7-fXT14pe4b #,n::R@ilrI!fzqnVEXdgD%Cnd B5Y83,j' );
define( 'NONCE_SALT',       '^_?kwt;`hOL`azNb^{P%TmG= Ve_[6DmTl#_8rjQa/TVI_,e=;3J;3uQ7$1j0HKg' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
