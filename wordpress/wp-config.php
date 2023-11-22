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
define( 'DB_NAME', 'wordpressv631' );

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
define( 'AUTH_KEY',         'O!z=@)kZk~?Ys=XeA6{r?I6^i]q77?N+.6S[4mH< q]|#xO4z~`F<NeAdk,G%[l$' );
define( 'SECURE_AUTH_KEY',  'XNjX1Fv-{0B1dzp.9he$L7Xwe.Z{o_[U5dmCrC,AtOnD$VBP GAGfmk W>Re@wVp' );
define( 'LOGGED_IN_KEY',    'aCFYo+V*~{urv]V_4-;m`f3E?`IT-Goc;m$D)nwPf0_6q:G(({^CvwE<Yk=nu+PO' );
define( 'NONCE_KEY',        'Eb>%Wnn)vPx%H7Y/HyyO/R+plSR-[*%e#iZv45k30.:KRarolBH/^SI49#8bD@N@' );
define( 'AUTH_SALT',        '[7T_OY|qH!:^8>{L]p1T>^Qmb_%:)1Td%dsH;7n8RzTApKs;78[$%*<L0$5)/; s' );
define( 'SECURE_AUTH_SALT', 't;n3SGzn&um$*bVJfq}LVj9[Hp(Bzdrl.gziJ;7G z+`Pq:d!MY:TB4Xemf!u&ah' );
define( 'LOGGED_IN_SALT',   '.Jjf+b5(pO 8CW(<9ZB#VMrcKr )=3.pBe!#/`yL4 ;^{6%A&+K)7{V_(0X`%((@' );
define( 'NONCE_SALT',       'a>R|p6bZJPeD3#%dDA0JftZj4wV<6#>vl_RyVSr2r%hi:cqEzVF+jKf_Yls4[O/|' );

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
