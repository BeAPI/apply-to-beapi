<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'root' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key
 * service} You can change these at any point in time to invalidate all existing cookies. This will force all users to
 * have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'S{t|{$<<zkU@gz5WIMZ/d rLEUB#-{Q+?uo]PDY ?(P8Ar(^qETs#;NJ@No6wqe~' );
define( 'SECURE_AUTH_KEY', '[qX-:iC++7cJ|-G:T,@I-(-_Fu_>:=y4@qzv6[Q`(~e0+cfht}_B~,8;-QWY>f7B' );
define( 'LOGGED_IN_KEY', '!+{=0Rj7}nu3!Vc,xy]1v}.bdKqp=jd=5mbKK3APr$_L-QT<$bj/iq~h6 LqfZVm' );
define( 'NONCE_KEY', 'f+oILwb>^} c{2PBO!J2Z2Sqr:gXl+Ad>Qz-E)--!:gQfOyXy7oJQC{j>hRpz/*p' );
define( 'AUTH_SALT', '#cc:D/|pg34Ne>0+~y_*zxH3TIRC-R]_Nd4,rJ+)@WO-XN}on**ayIbVN%%uU,Ba' );
define( 'SECURE_AUTH_SALT', 'GZLGm(:uk=*u?~]6hw:cuxH0>X<^+]#sMw]_g#}4niI)#-HOQ&}b|ny)A1vJr=S/' );
define( 'LOGGED_IN_SALT', 'b+ITH4zz+LxSy#5V6sS=pSmZ>u?YWP,P R&Sq8dM:Ky^97O.6*lH+,NGT(6ZImrW' );
define( 'NONCE_SALT', 'f[wg6n>34{2Wp6Jt;uJT4Yh~XV[a@1Z~G2k$?PQRUt{682F{#w-GkKvg-:)-/Haw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_a2beapi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', true );

if ( WP_DEBUG === true ) {
	@ini_set( 'log_errors', 'Off' );
	@ini_set( 'display_errors', 1 );
	@ini_set( 'error_reporting', E_ALL );
	define( 'WP_DEBUG_LOG', true );
	define( 'WP_DEBUG_DISPLAY', true );

	define( 'SAVEQUERIES', true );
	define( 'SCRIPT_DEBUG', true );
	define( 'CONCATENATE_SCRIPTS', false );
}
define( 'DISALLOW_FILE_EDIT', true );

// Take off revisions
define( 'WP_POST_REVISIONS', false );
define( 'AUTOSAVE_INTERVAL', 300 ); // seconds

// Disables all core updates
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );