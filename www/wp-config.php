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
define( 'DB_NAME', 'wp-test' );

/** Database username */
define( 'DB_USER', 'wp-test' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'R-Kq0u9p,&0Q9{KO(az9?UNX2-iavtdjeYkthz6qSCiT_BM]H$kl?CJ)`358P(UI' );
define( 'SECURE_AUTH_KEY',  'Ga!zzs,= 46A5@#L&[V!5cI!?47Tm4`s_^Yh!d[Exj{}QHyN&sK.E(|I:X^v}w> ' );
define( 'LOGGED_IN_KEY',    '(p{{K0ghq;b3 Ab,4kXx4F:5z:+>>po4eCc,rw]kB>f,AleNhy1SPtZHOjf*1!>A' );
define( 'NONCE_KEY',        'T}7Qpqm@b9=2X8!Z2]VnLtt,?V%1|SrtpGo]R=:H<yK ^,:oWRcj7gW7Xn|z4[fF' );
define( 'AUTH_SALT',        'q?y2TLigcXs%~V]nH=as_x[/byVT{[:Kf6{%_zxrJKbqz79u U%=zShpkWTbZi5Y' );
define( 'SECURE_AUTH_SALT', '}V79a~o[#iIV1?dJ+<a_asi;l:DnP^~a@qs8 0G7L+*H[H|I}&!Ji~~Pi#~Kq[R@' );
define( 'LOGGED_IN_SALT',   '5lvJZ=$y@gPNnW2E7|ko>OXbo}.0X<9>/;H>oC%>N?S;}>7qnA@o&;[YQhn%e!pq' );
define( 'NONCE_SALT',       '$eu46a$I@y27~+Z8&9N7D~O(ymxrZM).XE_M<kV&%N6yA?A)]&#Y3x8MD~j@.Z%7' );

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
