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
define( 'DB_NAME', 'webbanquanao1' );

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
define( 'AUTH_KEY',         'sIRbv-:sks]&u{jG>[eboeWgV.TG+[8;wu]MYdaXA16F6OWbwq>g%P%k=xm*`Vuf' );
define( 'SECURE_AUTH_KEY',  'o1>3dyz*ab?9b0eR/oBN]rvY}bc_fW:qGUOxmuJbmqk.JE;Z<Xn<g!7p([6[2;^w' );
define( 'LOGGED_IN_KEY',    '|@5_RG5;*7E`jxy*F>#5Gt];NHj4+x*Sus?ogq2`ja9+Xy{rYWCi#MFn`5gcSw%0' );
define( 'NONCE_KEY',        'YQQ?l,mW_Lsod3lvmOy$iW~c^5-Rs2z2fu%iFjJZW5~Y&z!# *j!jvTkhutjb^f.' );
define( 'AUTH_SALT',        'SdSSxfo=5Rox<.yc9H6M36X%2bsT{ZMpaN.dwU;+*Jh04/?*}dUn*kImsO10@vz>' );
define( 'SECURE_AUTH_SALT', '@LNje;pR67FyLI=hM_:xH.#%Cbib3_q,V16PpUg(7)[OWWqk!Z:@R3]x-Z`H:Ogu' );
define( 'LOGGED_IN_SALT',   'RSZLuZt#sQk!s:0T)3 )<l-3E/}J8QSd1!9Ie/peV&>Dyza! B__F#=^*,:!)>n5' );
define( 'NONCE_SALT',       'JwMp3F;;~,s@T%bQKDW633F.f/G`]q!x3?-b#R-^k`%~kO%A+|1$xT35_g`%*NH(' );

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
