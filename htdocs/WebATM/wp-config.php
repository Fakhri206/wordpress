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
define( 'DB_NAME', 'db_atm' );

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
define( 'AUTH_KEY',         'U#6@!vr2KqY8x^216l_QI[ir28bsP@jF;qTUFJW<Q(KKsj&]2M;O{!UUCk6Cb#&V' );
define( 'SECURE_AUTH_KEY',  'HOI%@ >C XIt=W{^@)>%Ehs7 {u36VZ!KOHDd>vksnb4q3yTdU<F;-l@cDXTDMy3' );
define( 'LOGGED_IN_KEY',    'g`0+<wR/Q/_TvZ5 }i<w|UcXcFXRBq4^FCHShBG4)L)_)~G`5nGcx_z}4LN;bqj?' );
define( 'NONCE_KEY',        '/8oBRdd8{gG1k@Y)kw.B:Jr0/k_eqj_$_bIdimpBMp2cA{Q=GZCV_!=H9PZ)VVv4' );
define( 'AUTH_SALT',        'U#hM1xV{(8$`2lQyWcHCoKWI9Sm,N64wXq&[>Y.A]V`XUc0^V^!l2Bei7K#UeX]&' );
define( 'SECURE_AUTH_SALT', 'Ib{m# V3D&:a#^Se&Y=FJkUeja>F?Z>H&;K^=K8NrXAJwA{^id6U1R6XxLN2TO@:' );
define( 'LOGGED_IN_SALT',   'liOkQq@48V)R*y|RV4vORQVx]~Oh&WI{kPc>.Z.0nN/.> 5aBO<WMPtqoc#3Y+0z' );
define( 'NONCE_SALT',       'tW;C5H2B5NM-iV2u-Bl,aZ3v!h1Lfc?(Aa>h]NNpXERIq.%@M!Ze/Yms:tJ)1(!.' );

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
