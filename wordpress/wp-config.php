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
define( 'AUTH_KEY',         '?Zc@}.;?>;xoY8:Pq4A:Sz/,KiXwNSx;f{cG,b~C67>/z2Qp(53H~F]2UrTvJx^v' );
define( 'SECURE_AUTH_KEY',  'CV7NcHA36*M|(2|Rg?~*2`#D6Y5oTJHTP%!U}`Q.q;=$8UlnC^Z|/(-]fFz.RhXJ' );
define( 'LOGGED_IN_KEY',    '`F4OBNB<rV-ab@(:GoIV;u])iD%{(s{_Y?D`i+Jb^x-|#&sS+LX2xj,QcmR?a,f<' );
define( 'NONCE_KEY',        '%C--ih7-[1$rGi;.$dUc/#]uQYdEF1nqkV]dVT|?*x$|T(CQn1e{`WNGk^<.gouB' );
define( 'AUTH_SALT',        '0WhU[GOC*a3keT>&N])~[fy:[{}Rd~.R:=G }%)reIE#t+ZTv0+!%YDe}tHh&uB]' );
define( 'SECURE_AUTH_SALT', '%$W Kgjs-o^}:8e6:INVVd>XEt)cDw9!p(FC(.Z+zCt6Qjc,}nl9k^0O5P8hal0^' );
define( 'LOGGED_IN_SALT',   '^7Qn~:V[i+~uv|w3}F~+x<CjH*<tXJU&ImU?:d>Q9jLO8dQz$*Kbn/~[#9>#m>{q' );
define( 'NONCE_SALT',       'w;|%lNR<LNfJx:$8eku}ueX9`VE:}jcw*aT1?25r%@hoz2eKR$g~VFi $,0n:_]{' );

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
