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
define( 'DB_NAME', 'linshxd' );

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
define( 'AUTH_KEY',         ';W_~jpR44Bn0zP.{+VZjo%O^*G2;X,c dh _v?S>w(L $Px+yIHR+*(6QQT;g2_~' );
define( 'SECURE_AUTH_KEY',  '}tp|CM~I^;QH/r`H/4nY3G8_]`(f _~%SNyI]bR@-<(=HtB J#[q>zL o!/Fi;IF' );
define( 'LOGGED_IN_KEY',    ',X?^o29,;/sqB]E+Os.};n*~|-:e2r/xf:-oN(tQ7o`y1YD>k12nq&{QY4`$mP;u' );
define( 'NONCE_KEY',        'Zhr<]4y4&Z1S3l]X?zW)%/}$2mcVG|_`b?T+LC<pF8E:Yg<~f7fFVa$WSn+H_$X~' );
define( 'AUTH_SALT',        'sOP[`Y#i+e)O+9:YZMX.[`on7/?RkuFM^t%ir[iy>=SchQR|Hsi/$[>elbq|QofM' );
define( 'SECURE_AUTH_SALT', 'pCq:>@~)k$L#j`CO5Ql=%zE R)^2uLj|SxEnMN9Vd<UM.}zw-.Tv~}J|Q&3>n|oo' );
define( 'LOGGED_IN_SALT',   '/A,kgz@8S9NDHTS,r&))UuV/s04@6*vKOgA$kxRr!/Vm52J!)DO/Wt@r/=Vx[TxU' );
define( 'NONCE_SALT',       '3U,(Z%8-CJESm3F5|qG,II2]Z.nQLj=Yq>TJYr.N:<i[21{}f1>kv=xy`laa7vi/' );

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
