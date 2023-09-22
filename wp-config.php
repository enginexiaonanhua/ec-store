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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'e6Th1logo!' );

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
define('AUTH_KEY',         '=RM+]zuwwrSbXW>+#qxDO[My}m(MUi?bqcku9-KSb+{+`7koKw_*YS#p8,C0C};L');
define('SECURE_AUTH_KEY',  'S#zJ9KN3(KW2Ic]^9pu4lEdCGy-f^<#9oa}&{YC*A+:%5(xqMXzQijgHr]V$vt-4');
define('LOGGED_IN_KEY',    '0U$X {2]F4P:]_Wu%7R_Uve|VvaE T]Y,E-3s9|IYwI(l54q0H&`c|<c11-[VT(U');
define('NONCE_KEY',        'K36NEP$XU~b}a@&H}GiGs[<ZvPi/&04 -L3@Ik|j`?i_AU .VOUh^|TR2<|,(GZY');
define('AUTH_SALT',        'htVz+jG2ciVb4,1jNdwouw(5E:n4Jh0*+Y3vCn]FXE};-)w&uq32;[+#iCMXK-7T');
define('SECURE_AUTH_SALT', '*o&7E|-Ar~FN#@im>B2xH+a%1epTA+nV;?|sC.3p!E<&sm.^xPa{1b.9|3JK.wsy');
define('LOGGED_IN_SALT',   '|_+,`cv77l)ki+2}TDiM]|sVXP|oY-Kvuj-fbEZI=5a`;|{]oJ,:$UyB?~E1Mf&L');
define('NONCE_SALT',       'a|:-B5p<)p?QHGqm}>|wk$=<6]3s=c44e=^YFuz|(3Z/o5^_ ]VP+;2MY0P,XHQq');


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
