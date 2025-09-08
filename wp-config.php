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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'PdT^l$f4/CDeyM46w<mL2pmaqb!u6uxtMW&%vdh}$b<9~<xJY;XQFw6 K-]U3n9p' );
define( 'SECURE_AUTH_KEY',  ':Q67)M#F}@Pwr35MDV/rPz?0Sp<tT-E_mNJnvbqm?[9kL>gv-u5vBpmV2XinG{;T' );
define( 'LOGGED_IN_KEY',    '9f}?{%]1`Pm%.[v%iOQX&ezZP^&XjLq8zSu|fi+qf:QlB-A9g;R/{vZIXTokn$qe' );
define( 'NONCE_KEY',        'iT34ng*;!`~M4w1>3S@#j>CVTIj}QB8(T^nfUun;}k3Ef3*Tw)?#B]#Z60P4 7~X' );
define( 'AUTH_SALT',        '=N>C>G1{^-;Zp`V[]B|We7F//(8@?S%XHp[.^mL]#Bq*4~=&0tq<+Gc>P${TY/q}' );
define( 'SECURE_AUTH_SALT', '>^e,U9<#2+y>*-H;j%*k8J/39{xd:G+#?f0[^C52BmLT:%L}z~ppbk7_-(eNw&E*' );
define( 'LOGGED_IN_SALT',   'REq!s4h4Jmyr1}gO<>*oBWNF@#xzRQ JFzg4ap.8CbZa~^BxcrI42JBhn)n@CmXI' );
define( 'NONCE_SALT',       'C@&L5:9ar}{V%u4Q{^zy5X05(*@cduPmP3AZ-J3x|]u.88 )#5%*z]sYXF3etO7x' );

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
