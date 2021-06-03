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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y7T[Ijr;z?Xtzo^GphtGn8NCde?A=bhKdJgVizV*?11S>NEaRX]pt|Tts/Avq 7p' );
define( 'SECURE_AUTH_KEY',  ']L!GqU)3|(N882}Eb?q}!1uC7aPfoko^Hxb /J7}yRW&=pu5,:|NO}#4WU[)n-Ir' );
define( 'LOGGED_IN_KEY',    '3^|13X2qQeLf>E?6]a/B/3UR{daTok![5~Tuq,iT_1sVh!F@qY#S?`X.xm~sHd.q' );
define( 'NONCE_KEY',        'DdeubDT10sJ(Arg9?iF{LSH5]L8E4n**DBt?{!*e*?:kY+=xdR;<RW4da>s,jW&]' );
define( 'AUTH_SALT',        'RKi% pJPtSI=O`~*u /X2/O3d&[ZPQt!W]@.Ympy,4$U&,pgrKhZOwA|mUvX<=.g' );
define( 'SECURE_AUTH_SALT', 'dUGA25 yr<}#3#r3*LrHicfBa$gY_6~7(Lss#@lq zrTU|`-BS@MT}S5.)#D292n' );
define( 'LOGGED_IN_SALT',   'K:]_A$JV$Eq/%Gmv[umQz+Qg:Sp9uH.a~g;!IWo:PJYJdbaaco6k2?S.z8~B+[Qe' );
define( 'NONCE_SALT',       'd~g4U~cjc>.v>C{^)HVt+m9)Obj/7:K[TV.YzDet@kQ<;Fs.-_s;N({oOf;;{;e*' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
