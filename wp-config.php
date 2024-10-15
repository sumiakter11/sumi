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
define( 'DB_NAME', 'sumi2' );

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
define( 'AUTH_KEY',         'Z/Q6;#A_DC?Vp(O__-&99T%TFOQ:Aa[uc2HU796vEaPdZgcvm%tTs%ry<3Hbwa_X' );
define( 'SECURE_AUTH_KEY',  '?1Pcx=wZPbj*A>*:uTTRTh?u3h6K@6&ov+MUDZ@zlhWDu3d4:udjyQORR:E(QWU~' );
define( 'LOGGED_IN_KEY',    'i@!2H$^;2Fr>$1r!#{V^}EFwndn/Is%mL3A~%?Z08ah;5SFU~KSp8LdCQ$SgTqvD' );
define( 'NONCE_KEY',        'fOZ:#nFyRgS5wWlrIj6d77fwB=aiMLO3>tah{^WX7ePgVlM{a7Q]9~`Z!I8Ra;F6' );
define( 'AUTH_SALT',        'm&CyV-|jA}EK~.^E^Uz?OYE+(1y(Wdr%iR]?hEI-%GAA>1@!1D-j:}XlsMkBV0QE' );
define( 'SECURE_AUTH_SALT', ').2XaH1L9#$Nw1GXRqrpkMuP?DuYnA<1L/WZ)|QF*#!u&DKz=Bt&g>O/SiLkGcMH' );
define( 'LOGGED_IN_SALT',   '/[x@`X(b>%c//iSX5+K-#K?:yqoZ,s>P<EzDEot;^k?>pbN/HR7y*$+_j1#,=Tzn' );
define( 'NONCE_SALT',       'n5R[YnD&H:.!DIX-i~,&,K5xryMviWYAA8coOC(emNM<T5qP]UA<De:0~o;6}R=`' );

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
