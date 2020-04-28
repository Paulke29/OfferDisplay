<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'USFExtend' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '& @8Z.dHy=CB4tb2mb&T&B@f8==`w3x%inG*y;Mil%{3LJOhqBb6wDGT@^s|yW]8' );
define( 'SECURE_AUTH_KEY',  'P/bg<2mNBgi3(&IRv1%o25XCr^CL<!eh$ -J3`3Gw=JA Yz8VB96u80>H-0%F`g!' );
define( 'LOGGED_IN_KEY',    '_DATOI][N>?DzC}eU?e*xjb-]?{6pi~YyKqo N|F{k U|N`E=i~!*%[Jju<SwMVo' );
define( 'NONCE_KEY',        '$RFI*I<cMr-`Mppa/dU`YX|7~Lfw K?O8]u}UmD#@Bytz0HI1U&:l!D)KiPia-H@' );
define( 'AUTH_SALT',        'KWIt|Q6VLk+Z7r1u9i+_rPv=5USuj4r[eindU-/7Q#U0:p=3n3<MAQ</(;B!p?:=' );
define( 'SECURE_AUTH_SALT', '~pdgEyx$}FD^ TpF4t}Yk+eS+fdUnzi7e8&8:w#zj@>|BB@amARQX{SNscG;fZ!n' );
define( 'LOGGED_IN_SALT',   'UnPU:CoaT:5aBrTB?dJ<QP7HVa=F&alv`@mk,h:&F_P4+M]~&w)GdCLlW~5OIe]5' );
define( 'NONCE_SALT',       '[[`^o-2AyK7.8dBYF4p0S+g-P7,$p}k,pcj8D!<RN+=K)Uh*d}L+M:*|`v=a,JY=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
