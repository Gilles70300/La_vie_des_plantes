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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',-9>Ez1$F{^d02{QdFKw2Nzr|wP9uf6x`J)-?8zb>,|V<K~,pqQa|/oR$Zdt+Tqn' );
define( 'SECURE_AUTH_KEY',   'WC2;`%[w623u/GWKf}M7h=E&<xWV&O(Jvo/kStO+V+b}m.5+3cnTXYVIG2XHlzcU' );
define( 'LOGGED_IN_KEY',     'ZVtg`jfdnco-ISF_W@AM`X4f@yyM!XDm&>pPz([5=CvU0O H)QB{Ph1ii`BYv5o7' );
define( 'NONCE_KEY',         '>UZhu1FW|X2RV^*G-(G=K1p +p@el=$`lLg6+ #P#}VeOgj.E541J.cpE(l!3@Z`' );
define( 'AUTH_SALT',         ' =hz(qr.VY> x!dv,>34YLujwlkm23|J+b$y~1GKI~8)VJQq+z2${5:m~7z&ZH8t' );
define( 'SECURE_AUTH_SALT',  'R4TV@=*9RXtTM=p_%X&N*JATK%iT+V/E&=QtW%8%(i=Aec6Qn&M$X2iw!m%AT. E' );
define( 'LOGGED_IN_SALT',    'NPr+sf@]C%P0 dl}g!gLC=o}kW.}qf)3_C~Ea19*>TcVYGvt}{Uk%RZJ2H;Q}lAp' );
define( 'NONCE_SALT',        'j5>|$P~:LmtimqWI#V*]UHWgvM$_POCcC}E__~^T,Ri3(XrX_6mXl(=Pnmk|&%]z' );
define( 'WP_CACHE_KEY_SALT', '6|x3y5r0^S%Olp%a]^rHFB[(Vv`MhSxY1TmgkZJhDsp#lP:*S3O8dhc|XN1b(Y3?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
