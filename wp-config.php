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
define( 'DB_NAME', 'telemedicin' );

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
define( 'AUTH_KEY',         '5YX=8N?eUm!k$j&L2B^Wm;k*mc(EZq?64SzL@*k;]La,Z`uS>)iq_ ^qDn$vU|AR' );
define( 'SECURE_AUTH_KEY',  'EdRp.<U5D<S-UM6PWxXi5ji(33*[y?}=^yIomkMTw UAHNA%:O7_Q<1[mgH1{%.G' );
define( 'LOGGED_IN_KEY',    'yWU5*BmZQcacf[uY0.dHDT,@>[KZI:KD>`t{pRf+LJhW+V^>D[a8zsAC@cUvgxr,' );
define( 'NONCE_KEY',        'sg8^ey9OTLaLQ (Nm|R`%jLc]X[W[,0b%Wp`0PA0B|>(*u+?xfYw{=AMpG/-+2Ke' );
define( 'AUTH_SALT',        'd]OW}U,q4QpX e%0O N<7_ MsR?W_A|bGi ?Lt7rK.v$]#x$5*q8peOzLrP%Z{mO' );
define( 'SECURE_AUTH_SALT', '9P`v*uqN:A_oT{{=^=xbq?|F1|9zsG)r(j,bzKMxE,F;z_$UStCar.2S+lKV;v1_' );
define( 'LOGGED_IN_SALT',   '&^ilA<ovId`WYt9n$b1d}[qS>Zmg*]_yc`(`wMX]63^LpAFaw7*;Ucmbc-(.A5qe' );
define( 'NONCE_SALT',       'oFMGc0(mt rJI(GL-5ixeK`T!=8%m- $xs%y#L?8==#]w7G4AKAtKx[%SjPOG`|q' );

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
