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
define( 'DB_NAME', 'db_spvcshop' );

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
define( 'AUTH_KEY',         'yyEV}<t%!K[Rg~S5pL23]k07s53C|anYsYw:MS$i=zNZ1<i.mgVMFuX}9&t*2]).' );
define( 'SECURE_AUTH_KEY',  '>})fwcswaj{D$7,RVn;nf29#%p4wODy>*tvp~OEPP(${VF]a#:6#<b4d6 ZylX$G' );
define( 'LOGGED_IN_KEY',    '_XE|jlenPu6f>(jH.HHI!=>T]=OP8Us9a]u27.>`Z-k<]4?4iUcgH&Q~OLly}7#&' );
define( 'NONCE_KEY',        'jTemtL2Y{b]GtKlZ_#s!kIOEU!me~{h_tfsIlXiWM1t)_Y1kKRsXguVg/U!uXw+l' );
define( 'AUTH_SALT',        '!`lN!I5z,>`j9v k>q?@j9u0K5E2;?|v;i7Y6e@81|BhCoHpr{6ss9Nej<(_!o*1' );
define( 'SECURE_AUTH_SALT', '$J?h{^EOWKY*F0!K7El2oX1nc-#B%f<Z(tR?}?~E88+:h*qC!eM0j(Z1*pKTGGQb' );
define( 'LOGGED_IN_SALT',   '7Wo~0u^G4TSG=]^Meo@$3`<sWox}ceoHpOMNUc]%_h`3B]Q?7Z`!_rxnrYYJ&5U8' );
define( 'NONCE_SALT',       '3ub]jS)m1Ha9]Vr;fDnnugdhyxRTTMWm/GBj! xMqcfF8k=Mw=6HsYb_Nd,V4rlB' );

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
