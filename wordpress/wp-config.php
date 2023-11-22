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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         'RTx79vQi.GY]sxUx}4?O6zH`NR9$*eniX:o+rXok:hyB?kM_vGAA<}A1z0V;5YeX' );
define( 'SECURE_AUTH_KEY',  'a))nzUo^~AT_j2+*e@1*k]Y|aXD}@ q[WQwG4]9FD!7aj#p)^6/V|m4<4dM6M{Os' );
define( 'LOGGED_IN_KEY',    'l}#x^&u6cT<4CL ?@fc hnv;0Og_Iyo,/pNMcq>3?8E?O0FQswWgb47zz~Ijtw L' );
define( 'NONCE_KEY',        'r4JHd$c`[J,*7k{kP+w~dpt} hBohS<Lz_T6[T!Fz^jUsdE-4]p.74uj^po<07Fb' );
define( 'AUTH_SALT',        '.9a{qUQNET%)bC(7jW}7kf e=5B5Y.),^}RLx{Pbo]&g[,&k{cd#o:To5!0I)x1w' );
define( 'SECURE_AUTH_SALT', ' o@4[/~`E@]otyOiq,j`]{nz:_Nu=/zG^d~fmAkb E)(z;w~E4UoH@*I}>6GD{I*' );
define( 'LOGGED_IN_SALT',   '^pV<W !7iLne%Vj:Ke]/Le]4L1fYU9qeN/>1Ld]`)]Ia!V2Qo0rMQ-d>NpT]{.P`' );
define( 'NONCE_SALT',       'c$RA]O,Q$G79#nV$>-Z&7pa-nJ^k6_ AMmH4X YvKruvV-/V,?zcXE/Y% ;~X*5L' );

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
