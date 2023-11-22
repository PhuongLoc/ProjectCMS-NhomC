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
<<<<<<< HEAD
<<<<<<< HEAD
define( 'AUTH_KEY',         'Quf0|hpS86|nA.Ot$KinVNk^nulGUXh`lc)zQ9SM^:!3%F~Rl .5R3Su8QL.Z]13' );
define( 'SECURE_AUTH_KEY',  '&:tv`rh@Z0j}~Dh@U[+%K%bI,j`+v8r5_KE3mH_b2i~=nb`1p}%1gz1; Y F%Qk{' );
define( 'LOGGED_IN_KEY',    'k~:CO|EI[&F7LMnp;Q}BgipbLW]$G=a;Cc1[4e!D:HIs~cUEcrEM_h652Yk!i2yq' );
define( 'NONCE_KEY',        'bBr3lYzi>w+:&0c[%Ou!O5fD,!5|NlmI7n[qkp{N7zkX{T.Twcym[t}?3]XsE1}Q' );
define( 'AUTH_SALT',        '`l45I@rVj5rq0@dOIEY{0~b6n{|i9$5,tm#]5?**lX.vJGiJPmq4<eG.QnB@g< t' );
define( 'SECURE_AUTH_SALT', 'A+GUV%#14wloio}sD6ssCOYjt6!(?J-9l.rVNHDeNdAPfmPS|U|ZiKB .})q_&bu' );
define( 'LOGGED_IN_SALT',   '2?Z{i(McCoJ.=]U6gze@y-1AR>t*j1bAiM%.T}~1FZoM?T=: MZ:GjkDZJ+OV1^z' );
define( 'NONCE_SALT',       'A1zbB8k0UBO6vG<<BIF C) oKQ_ EnI&I8bxl)@OPgmkz%3W~`V4)Zo>NNOJptUz' );
=======
define( 'AUTH_KEY',         'RTx79vQi.GY]sxUx}4?O6zH`NR9$*eniX:o+rXok:hyB?kM_vGAA<}A1z0V;5YeX' );
define( 'SECURE_AUTH_KEY',  'a))nzUo^~AT_j2+*e@1*k]Y|aXD}@ q[WQwG4]9FD!7aj#p)^6/V|m4<4dM6M{Os' );
define( 'LOGGED_IN_KEY',    'l}#x^&u6cT<4CL ?@fc hnv;0Og_Iyo,/pNMcq>3?8E?O0FQswWgb47zz~Ijtw L' );
define( 'NONCE_KEY',        'r4JHd$c`[J,*7k{kP+w~dpt} hBohS<Lz_T6[T!Fz^jUsdE-4]p.74uj^po<07Fb' );
define( 'AUTH_SALT',        '.9a{qUQNET%)bC(7jW}7kf e=5B5Y.),^}RLx{Pbo]&g[,&k{cd#o:To5!0I)x1w' );
define( 'SECURE_AUTH_SALT', ' o@4[/~`E@]otyOiq,j`]{nz:_Nu=/zG^d~fmAkb E)(z;w~E4UoH@*I}>6GD{I*' );
define( 'LOGGED_IN_SALT',   '^pV<W !7iLne%Vj:Ke]/Le]4L1fYU9qeN/>1Ld]`)]Ia!V2Qo0rMQ-d>NpT]{.P`' );
define( 'NONCE_SALT',       'c$RA]O,Q$G79#nV$>-Z&7pa-nJ^k6_ AMmH4X YvKruvV-/V,?zcXE/Y% ;~X*5L' );
>>>>>>> 2_5_VoThanhLuan
=======
define( 'AUTH_KEY',         'O!z=@)kZk~?Ys=XeA6{r?I6^i]q77?N+.6S[4mH< q]|#xO4z~`F<NeAdk,G%[l$' );
define( 'SECURE_AUTH_KEY',  'XNjX1Fv-{0B1dzp.9he$L7Xwe.Z{o_[U5dmCrC,AtOnD$VBP GAGfmk W>Re@wVp' );
define( 'LOGGED_IN_KEY',    'aCFYo+V*~{urv]V_4-;m`f3E?`IT-Goc;m$D)nwPf0_6q:G(({^CvwE<Yk=nu+PO' );
define( 'NONCE_KEY',        'Eb>%Wnn)vPx%H7Y/HyyO/R+plSR-[*%e#iZv45k30.:KRarolBH/^SI49#8bD@N@' );
define( 'AUTH_SALT',        '[7T_OY|qH!:^8>{L]p1T>^Qmb_%:)1Td%dsH;7n8RzTApKs;78[$%*<L0$5)/; s' );
define( 'SECURE_AUTH_SALT', 't;n3SGzn&um$*bVJfq}LVj9[Hp(Bzdrl.gziJ;7G z+`Pq:d!MY:TB4Xemf!u&ah' );
define( 'LOGGED_IN_SALT',   '.Jjf+b5(pO 8CW(<9ZB#VMrcKr )=3.pBe!#/`yL4 ;^{6%A&+K)7{V_(0X`%((@' );
define( 'NONCE_SALT',       'a>R|p6bZJPeD3#%dDA0JftZj4wV<6#>vl_RyVSr2r%hi:cqEzVF+jKf_Yls4[O/|' );
>>>>>>> 2_4_PhamHuuKy

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
