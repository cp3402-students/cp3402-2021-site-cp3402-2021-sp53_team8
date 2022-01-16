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
define( 'DB_NAME', 'wordpressdemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?~H^;+ rL=pj=,{n,xh15Z<piCzuaA%R;[/d8EF5jf3n yN P?wuHEQwm>n8}!^L' );
define( 'SECURE_AUTH_KEY',  'C->#OJ5D:x-_p`X1LI?C#$3/^C;N&|7*o8N<!YD0W.L_g6Wc.$kPW_FK%tp7jCu#' );
define( 'LOGGED_IN_KEY',    'vIqE~Ep::Lwp DE0xMIvZ?^#qk_8,Qp~4 L1K)?t=iPQAkv9Mb3cOsGM?|lS=drF' );
define( 'NONCE_KEY',        'g=/:FybtRyfYmy;-V85sZb1U!SE~1XEE!:R;HLP<{,BZ&!Ien!2(;SAXY-B /(WA' );
define( 'AUTH_SALT',        '!QK{<cSzTs%[1i8=la99bBWN75O_02]o@O}v9[B>A7Z,vE*&6P/Jo,!4w;rM* #F' );
define( 'SECURE_AUTH_SALT', 'BPF#.sW94R)q,wS8<hW%L@</Y3T/%DwXE#,2-k![?`qxFUI+T1jUiDU6Oz=Yn/?!' );
define( 'LOGGED_IN_SALT',   '+w4[Oh>vX1Z>}PqPC96[ubes^8gdwbJ>+Nm?aPc4SQ Y%HfI!MXy@[O;a)NDd$KX' );
define( 'NONCE_SALT',       'hC&C_C**<@UHM)d`p~UfdL1O}a0ry7P_N<ugr16wAuud`qIiuY~ cpnaoXCqK8Xp' );

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
