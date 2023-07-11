<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'easyglue_capitalstreet' );

/** Database username */
define( 'DB_USER', 'easyglue_capitalstreet' );

/** Database password */
define( 'DB_PASSWORD', '7I)B[6tb0h2Y' );

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
define( 'AUTH_KEY',         'Hc#`a_f_)gpH5arbVbFu5j`vGK{[1?+RMA9X^hTL?{w0jO1~|}V,# wO0wL_$yv|' );
define( 'SECURE_AUTH_KEY',  'hVyC2z,<x9z}Lk9DV@ISjl^9yW*[o;xi:kJF<LlJP]v*1AQTwS*L+->>78<o,<DB' );
define( 'LOGGED_IN_KEY',    '}cd&%R%3Dcg9rP*^vPt+5>5sy7{O;BghO9k^Q[1r{3&EzJX8Mj,Pv6A]qR78F8G/' );
define( 'NONCE_KEY',        '%+[s$Epu6759u#P[2Z$~I] ,j,9N0$g#NHWigfM?Nf`-t1IafSH!t<`OE/s!#wbi' );
define( 'AUTH_SALT',        '.P54,JOg|!Bx_L95T*2cQc=!ybYErJsUZnY_[uFX9:3}cOQ_}(}Hw2/Aq@`l #uo' );
define( 'SECURE_AUTH_SALT', '`7[06k%J<Q zf8U^nzcoU+}=w4KU,5$^#&`Cx@z[,D0SEF5Tzfpy!KT{SK&~zMNZ' );
define( 'LOGGED_IN_SALT',   'VK6f|K]a4R;oisSkA~bJE-Bt`q565_Wr/-*_-9{[Emz#%xLij>-Yd<fM>_1-ouQ3' );
define( 'NONCE_SALT',       'V!la@*21+=)R`-xuVH%}ohY]})GG*DDd7vy-b.K5P,&{DuCK;[{ge|v:dVy~f4WE' );

/**#@-*/

/* Add any custom values between this line and the "stop editing" line. */
define( 'WPCF7_AUTOP', false );

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'csl_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define( 'ALLOW_UNFILTERED_UPLOADS', true );
