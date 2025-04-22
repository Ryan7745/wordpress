<?php
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1:HD]o/0n[N,?;Ts~bIGi{V3d`zF/b*m~]y_ 818*QR_nQ) ~]Hyp(wWfU(@K3Ku' );
define( 'SECURE_AUTH_KEY',  '63n}wn9qK}LCb#wQuaqY.bP/&i)|uQXviV{So}7.I8}{2E++^)jkI=G7R9X[FV=@' );
define( 'LOGGED_IN_KEY',    'WMZ}J/:uZ6s5xG?8[#(QjoL8G|ZR37d_K,Ux!q`RD|u7BIkbIhZp`t_& bE&Yv1y' );
define( 'NONCE_KEY',        'Qc,[hKBOGOYX)p2y^$5,$SdGl F[C!gH]=xNyGS1{1ZW8lVCM!RY2W8b]UDA! f-' );
define( 'AUTH_SALT',        '+ZeU|b~!o^Uf`_&SvwQr!Iz:~+ZI6*WL/=.!K#R7i%7XJ5d(1j$8sM(_il7J%YX)' );
define( 'SECURE_AUTH_SALT', '7F4{D3sRsbs-TCgzX+YP$qckeo28*x13{12SAF %W-!BOWmP[<SM!=:`8iAlh@[5' );
define( 'LOGGED_IN_SALT',   'T #)`FQdZ&mM:DP::>Uw+j<JH/w*!!D|[?N@dbUWxmw2&jU:/`tN1Bc(oQAMh01F' );
define( 'NONCE_SALT',       'aQ{#]aoYCcK;W,S_tu&#4JH;*x<{Q!dV;T&K@iEl<oxt6wF:rpOxD;>OSnad[@2{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
