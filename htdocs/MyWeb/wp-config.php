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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_fakhri' );

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
define( 'AUTH_KEY',         '7,!-bg`#dLLL&SABSV$aBV~,9Y#h+:oyBv6:r~1yt=EZh`)>1`^,jUJ0cbUp,V%3' );
define( 'SECURE_AUTH_KEY',  ';n@OO&o$yK1ra7s`2@}{(.t[0~`,</Z{OL>Nm.~o<.OxnLib1?7@y6:@rQkJZqjf' );
define( 'LOGGED_IN_KEY',    'f&B@EKBrA#CA94 oCgLU[+d52md5MvSmv <A4BhhT#fJuZ)xQi%Up_+$J?E~nvxg' );
define( 'NONCE_KEY',        'p7:|>F8q:_v!Q$|$!q/3bFElnQ3vE>TVm_!zP~=zxBp1)u(iSo.SD(Mxla@BZ;N^' );
define( 'AUTH_SALT',        'Ok.x}A)4>Eg;=uH/6ji0Op?{X)(0.1.guX%3hw|dteG!a!zEvAWG4?ShmO*Z%)^v' );
define( 'SECURE_AUTH_SALT', 'onD[>6?$%tmQuO9K<hP*k*Lt]m90vWP7mc4GO|3RCOruV_,7_@dZt&<;*tZ@w^tD' );
define( 'LOGGED_IN_SALT',   'yvAIAOMb2h7+b.;,Vqo)f3boSluBEuVj_MIQPZfCY%^Nj_E_2coqw5@lYiC`UAi0' );
define( 'NONCE_SALT',       'r%1kDQJ4;C+^/_m):}b6_1JWe~hU%BR`.U{ry(th>K9|[F0Jj0=m}UGf$<xQTe2g' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
