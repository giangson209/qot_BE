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
define( 'DB_NAME', 'qot_2022' );

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
define( 'AUTH_KEY',         'Cl+Gm6#9>wXG[?f6}yO5y@248pkj4zQa!$JO,6[*-FRDa3/W4J>P&a)`=9e~a#Jh' );
define( 'SECURE_AUTH_KEY',  'vw>uUA:{l2+^4|]Qmgze]Roe?BX+JPg4Qj6ymRFvx$ss}1ZK>r Od[?8,4hL<Ft1' );
define( 'LOGGED_IN_KEY',    'KeFPGCEdC/RKveWoYCGOUt,c/)xnH^vPK6A8T3pQa/?9L)im.` XPKj4!n}Ih )f' );
define( 'NONCE_KEY',        '.Sp&PFUAQv_dc.cyC@m3OI]DLOUVSgM9ev}N1kM{Qlbc2BXy@[PN:7gV@m32~ule' );
define( 'AUTH_SALT',        'OiDf>zZR6m)UHCr26^<IFe+ V5.j+wy0F;lKX&aq5Jm4(_aDsUR%t ,- (k%iy/P' );
define( 'SECURE_AUTH_SALT', 'fK}6%+nj9;:8%fng3wp`8vemo ?-R?)3bXS Ophu5[*%ix4[B&9k%5QS!,u!H9Q&' );
define( 'LOGGED_IN_SALT',   '@|fK]!NY@F!<oa9*[h/6,S@eow5_` -266CzU[m}x/%A^+rPa^_A6|)T6TA%Yekl' );
define( 'NONCE_SALT',       'yp&~jMGTl1:X4anC?MYO`dv di![O>(1C^6^A8O@3Pze0:=y`8yf&W][cic>>H8`' );

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
