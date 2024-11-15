<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'win' );

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
define( 'AUTH_KEY',         'Yk_T {:X78nBJmwymb2*6jlYi~]zNQ`Sl61Z>Ob%wSa_%P/`K0]LsYy0zJ(~*C[6' );
define( 'SECURE_AUTH_KEY',  '$~K+$y@[F2{Q.smZ#.A8E}O9X:Lpg78Jd^kV<?lVpBbJHo1W@p?}tq$vsyV3eBgR' );
define( 'LOGGED_IN_KEY',    '(]`h)=;`PYQ{Y2gomOXt;+[>(QDhDybsK5i{ppTm;fy<dfTh4{lBU@8edFTG 8Ul' );
define( 'NONCE_KEY',        'Cpq|G,}>/wq(F?+J`KX9O|$yP2-[N!%R=OMIF(T:[Fyw0;vQ2hN,M)`&-MQX;DAB' );
define( 'AUTH_SALT',        'fFL|R32G8A7 l>t!|%}ZjQ9Mof5k/)mw0rZv{@=vE%9JB}rT4od5O#hy*@(S01jJ' );
define( 'SECURE_AUTH_SALT', 'QW70g4;Qsuz%?xRDPnlje#@a=^$QT^r ?!!&TM#mvqH[u)e:8gdwh%jvtkb[hA4#' );
define( 'LOGGED_IN_SALT',   'Qv1[*&pB1N}S^`cY|1F|dze C6ka?i/}]_4!ycuk9(W UJYK%dz@;0i{>l0 :ir#' );
define( 'NONCE_SALT',       'CwGC18A@Hmr~0>c1w%7s(!*}B{z;?2f0exb|BF7s>jvMtrGg7~SA* +N,5^wiLhR' );

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
