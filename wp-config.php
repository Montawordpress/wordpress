<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+O/n/S{1YB{]ksdwNUv,Md]8^aBa:E}{{Q7nqfV,jF_-~{=,l$=~25r8;*EcC/8T' );
define( 'SECURE_AUTH_KEY',  'V0nxb?^*8E*%^+5l#wQ&:xS8ZCWbdxIUqKB8&M[ii{gv?P|p}/wPoGDNKT+Osw.$' );
define( 'LOGGED_IN_KEY',    '8W|ny+JS:*DV=&3v?$#e;SOnZ-MKyqOq]<akIpKOC3kA&U<f=,%`Y X|r3i4Lnz)' );
define( 'NONCE_KEY',        ':iVv#c=vW*Rf*,uHu4~DkN5~0W!D_fgMU+m{CGQ(5@+l2|jj6Djgp=&uDx;J{2RH' );
define( 'AUTH_SALT',        '*ki>msYT:=z|~T>)C*^{eo<rliu8!.:C]UZm%P_ L;;.pxhKiiGaF~iA%&ofvV`/' );
define( 'SECURE_AUTH_SALT', 'BaHV6TT5oL(x@>1/:(0s9%.9qOQ%#~)jD;}4rz>^OuQCX)}yjH:A%NImLw5_ZT>(' );
define( 'LOGGED_IN_SALT',   'PN-r~QZn1EuVEU@SIk.j![xQ_t3M`dlgjZ-L~q7Ib_4A.lz~ bJ+<waxzf;U]^ |' );
define( 'NONCE_SALT',       'V9.7oT^pDa:5cw)!3jk5X.0CVMnAB]23WF7)Y&u(GRB.k4?xBUh{`2G6G$4?H`qm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
