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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'y{@Bmy{h{9X[k,hMm8^_WiOt-2DetN:;L?nxzS1+BYS67.r/mAEc2&&^]P;.hWA[' );
define( 'SECURE_AUTH_KEY',  '&p10@3b;wcX+3$Hug~]([ $d<q3:sGf59&bxB*DFKl^spnK=|M)% %?9_%Yt{7n3' );
define( 'LOGGED_IN_KEY',    ':.8i-{W&A j4@wjH0x:{:TP^$q=0;bimWGP3N7dKEs@KUmhN!^`/dxy8jZ6zn!EJ' );
define( 'NONCE_KEY',        '7?T;d&:*2Vo<2^bcbHaseF+-T(N=z@e*SO7?O(kgS4 0!d`sXBtxPLU3IYp%RIMV' );
define( 'AUTH_SALT',        'Nv1$N;>aqk%OG*37<_7 CUdwM|iOn2uFW]f]GEb]6up:]C,r0PI/sw/7W`.0s})H' );
define( 'SECURE_AUTH_SALT', 'dL#diK#+e[r4}%[PBPO*]G,+(Eg-6=gX^mxLMRTM#](8*08DSV}o|~TMh^t>l2r;' );
define( 'LOGGED_IN_SALT',   '(nmz`uU)LR}zWyIewMYkhb01e,I2x/_k|lg>XhgTF7 sbi,w![[R `%d)(X(&gdS' );
define( 'NONCE_SALT',       '(]vI0:o1i?)*^S:</1T~t7`%O((7%(3FV(I@[3w=jhBJ!-_{2V1/QZ h@4<Y-F$|' );

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
