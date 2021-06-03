<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'wpproject' );

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
define( 'AUTH_KEY',         'w0V{q_irHnuV#wS]X./HDob@,H%PIw`N30}>hy:Xw) _eDal^zMC*66A->9>.PwY' );
define( 'SECURE_AUTH_KEY',  'urDR7Qa/5srj&O<4`Fx+/G6I`lznvQ{D1QZ@N?fk81.<YEibN~LaRerS#i_,-9pA' );
define( 'LOGGED_IN_KEY',    '7;ak=}?v[rueV(:qYf[#YX&U<Y/,}-@b!v=ei(S=fn}ZF[`+*w.$5/tpj>sBUgw_' );
define( 'NONCE_KEY',        '>mvFQ[ Pc~<YwHWNowoOM.r*C#|OzTt -+jKvlCag*a&RX7dJO=+&iKv[[T^h0.-' );
define( 'AUTH_SALT',        '$o^)5mr2HX7LT=kz@hZ?O4m]BJ*iSMX)o(dx{2l,S<Je#6X^<)Nz8>k#?}JX*$q9' );
define( 'SECURE_AUTH_SALT', 'p5i K_Bahb5:d2N^ pAY6n]NKwVpa5*v&|D2O;9G/1FfZOcbx&1).rA(+10 7v(I' );
define( 'LOGGED_IN_SALT',   '/#~nW.^$)v(GJ,|2f<W2<y0iguJ&}.EK<5J4m`YImVTx Jk_B IkSVQF<XC$bB;S' );
define( 'NONCE_SALT',       '*0o=P [yO43OEZbw4kT&apm{ >o5#(age+B;)wO?pxUut59DX@D@ O.F^0J@D7t!' );

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
