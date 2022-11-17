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
define( 'DB_NAME', 'wordpress-teste' );

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
define( 'AUTH_KEY',         '?|%1O+p5k+UV3/uT5QjPvF&1+z)huC/^#ZI-O. Ixv]Bdm3zjqsHsv@itWRuW1>T' );
define( 'SECURE_AUTH_KEY',  '_C0IDYlo(|;|%8o(9e6:UKrd#dft{[T}]zx*M%&&Z]m6w&|a,e)GxyUP`KyyD`9&' );
define( 'LOGGED_IN_KEY',    'ZU++/L`^1Fh#BKknZpN99v,@T0G2%LI?;|O0#!#?fbioYa8u|opOy)2R3_tlF6Rq' );
define( 'NONCE_KEY',        'Od`@i2E{O#!Pr!FSTmhZ_>; HYOP1f7PBdj/$RF{$a-1<&D1iz]EcRvNM>+&#S9P' );
define( 'AUTH_SALT',        'cWNvaSfaQ8[fQ)8Fat=[}mNDz8lBA/5t ^^YIxlBe]?HL-!.e$*dqs/gW^M,CiQ[' );
define( 'SECURE_AUTH_SALT', 'VJDy>o<uN[}1o?^OT% 1JA~+!Pl%5Jy=U,S%4*3lGyI>serP/8v]rtH%$vUx|hdT' );
define( 'LOGGED_IN_SALT',   '{3mz0p|:rJpj&eT{GSGyMWclV|9<9MLZTX<Pj eM+p%O&6=rAB@3&=v!<n#ZfOQi' );
define( 'NONCE_SALT',       '%+y5BtzFq0HrQb)v&zUa@sLBwn:*;)kDX`yjQi+o(b!>;EHU*^H[@#G9/v.Uk7^e' );

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
