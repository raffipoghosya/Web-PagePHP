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
define( 'DB_NAME', 'valan' );

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
define( 'AUTH_KEY',         'JMcR(gGX7Gj*UMuOL_2y#J?0LT/!F&<d62%&)Y(_:ySL0%cW7q]FB,EU|d,|F%48' );
define( 'SECURE_AUTH_KEY',  'Vo=bO(6u/gNG6LVGBZ&{+8wS@,vPg2,~-rnBJUB6/S=>yxnDHu[O1fU&M/m>`E9H' );
define( 'LOGGED_IN_KEY',    'GqJZGN90It]VHV_!gvHPMVr? TuPA0^;iLbqX*:^*`@2!Oc5-g,h]!{w)5BDf%P(' );
define( 'NONCE_KEY',        '<|dtOZO*zP8CrjiQLrv~15VSlY>yR6  Lh#htG<!VPEH9y`=1{E^6!<[)i.@&-O]' );
define( 'AUTH_SALT',        ':&y_XZ*9>]{<q;3RH^hw#0PX!1b^hMDRPln]E?IMa@xb~Aw#qnl.Lkh306)%z&U~' );
define( 'SECURE_AUTH_SALT', 'T FNlpH(P6 WqgUKCmJ4o]|A{X/)wP?Bnkpqn]B|DB2N5x1A;7CE#m+Lt+ )w?H@' );
define( 'LOGGED_IN_SALT',   '50PK71N]hT*Sq&PIT&aO#.q01V }Wfip(uB6>&YiZOD5RD~<P[qkRY_9:kTanY`k' );
define( 'NONCE_SALT',       'T(qF&,zK:U>Jmn*Ecx}:Q`4U:kT?|@^k~HQ^e8x(yx_f;P/-mTFwIz #z&1bnFX9' );

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
