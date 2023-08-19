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
define( 'DB_NAME', 'novelmania_db' );

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
define( 'AUTH_KEY',         'Sb6wk/q<J#yh:.!vwKjf^M,3gIFWnIr}nsSbAP*b*.`(YP?X+ZfY]xB?FzAm+@ob' );
define( 'SECURE_AUTH_KEY',  'TU%[])$1JjFot- qU_Ii0NLMZfu(WL^)1+y<,$UoMOl2_#u[^+4X[/K.OUH=it![' );
define( 'LOGGED_IN_KEY',    '&mTa-O91MY6,m)m+$qDrxSF&CMv)--y4Xu`AbD?{-t(W(HfJP+YV_X{cM/HLb9&u' );
define( 'NONCE_KEY',        '_r uI?0qz~+|jon>}GQpP.uQ1kcHVy]/H_z7Am8kuXfP0&rDz3T#eJRv_LgggUt<' );
define( 'AUTH_SALT',        'z(o3yDsq;m%AbY@<X[XU5HBdYz5Mv,y9.Rq{c7*G5L=Z9o-[.G9W08g06a4$[G5(' );
define( 'SECURE_AUTH_SALT', 'NQ<CJy{M}RV<z(q#*oVa]BT_(7/_Ea<./-CFu,rAiG{hru~NY1ZPl#4$!{o7JGuD' );
define( 'LOGGED_IN_SALT',   '|]6<wI3C6cegplhO;u;KVTps{T{I:kyusMWNjyZ:Ne`ysX^gKUd]Zo=Ix$GU:+wR' );
define( 'NONCE_SALT',       'W?[Ac)avI.A?N`>xf#F+Y,ldwfto^2|5uD<`o!5/`U3U-$sbf~.#&tfEyKsAhVZ{' );

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
