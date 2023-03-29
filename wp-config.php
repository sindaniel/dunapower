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
define( 'DB_NAME', 'dunapower' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '( h%uJ-S:NzoJs2$KY#EF#^m@3BBm#Xm&Sh-]MmA+xFO4pi@*^k?r`#}8Zh3D8IA' );
define( 'SECURE_AUTH_KEY',  ']W{q#nh89<Gz ##I:/QP2hGB+(_(XH?8l]ueAPZoFEO!}>pu4FS<__Pp[=K<i.,N' );
define( 'LOGGED_IN_KEY',    '&4PI]JrChd_dZ*~*?#;&Bp]Wa@UU>>FnYn}{r^{^]mRnj2,IDR!L7*[%J)SwSXlg' );
define( 'NONCE_KEY',        'S//JP]X{3*|(+vBuZy%Op,t/^(q@xp,V]xi23|&l~p!vT^qWhCUZlJBKh%g #ttl' );
define( 'AUTH_SALT',        'H??|hfV{?Mxn?@YN;7%8?{<Uug.R%yx>xSUN%Qfu23Ud!zJz7wgALp)Z#xODp6*|' );
define( 'SECURE_AUTH_SALT', '/D05LG`NQBEDO[WbVk&UL^dp%Wzvrg,H+B#|t~24/_y]Q ui%f~XQW,>WC!Qwr!l' );
define( 'LOGGED_IN_SALT',   '[AQl;qxkE?@G3;s=PB_:eDWASZ(RC>)We=eY&.HKTt:`3HVqny?Z1.7*?pQN-wg.' );
define( 'NONCE_SALT',       '@|!CA(+N<+lW2aJ&6r=EJL{zOwY1VKg(.B:M2};-O} *54>FX02o4w*7hNZyFs <' );

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
