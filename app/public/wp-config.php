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
define( 'AUTH_KEY',          '@$ Y&>r1@Bj0EOQcI=ogvpB,_.w$4B4n>u87-()~;m4ihK]RP)|?.HRTX/,JDR/(' );
define( 'SECURE_AUTH_KEY',   'LjQaE|;=/oxNB}]HTg%J/bx0^oL0w+:b7.!HsSa<XnzL4>Gxj+jQ>qayfb-!W]uc' );
define( 'LOGGED_IN_KEY',     ')-Oifj[YY]>9.IgpzxxQ2>>:Nf6`eK%w&uY`#q8+n5^c6d7HY,[6yYl!qXmdqWpD' );
define( 'NONCE_KEY',         'z4|!K;dkgB,+E=T0(YJY3V-=4x5{%o&z%dHolz -na2p]a?ed~M6`:;4lIpZr!q3' );
define( 'AUTH_SALT',         '])r23O;$E#B+#W?VGu|*;;ldrrkN?Ib(NyChwPD`o5_3T?Jq@(Pr`ww5!eb^0UV8' );
define( 'SECURE_AUTH_SALT',  '5HDUz3SP9Vq)7p=D72t4Q8|5i|i,7br1{w;WE H|o`O.I*$F8,zzwPYn-1$ov/Wo' );
define( 'LOGGED_IN_SALT',    'eU H84x@dd[AWgESl>fDYz(SzyP^.eJDC(dU{Lht~7!>N4w}t4u_J~19v5Kj()=L' );
define( 'NONCE_SALT',        '`b&2uy`-S4o|nCl~t#Uori2~re s|FvPhPx~]z! c8twDYHOF|2m*m4v@+)gt1M@' );
define( 'WP_CACHE_KEY_SALT', 'W=XAhRdH3KnVt{_q`I3sHa=@h^QIzeb+.*-7##!Ey|~j[Dbyx=sKxhmSx(A#-lxH' );


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
