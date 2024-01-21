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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'kKMbRSmHpOmm&5FK9sKn[b(Bp*Mj-o/.vYZ=`-{xG|R!E_L2A^4hq./FU`^A[D:+' );
define( 'SECURE_AUTH_KEY',   's{cYU=cN6 h?#gCk0g|<&32P d0U@/Bq-[Ee9j0sb#cY?YqQE1>YaI2t-8#TwyT(' );
define( 'LOGGED_IN_KEY',     '-OxR,RfQUD|>3E~VI%dVtF}xE$L>a!lhf5q!0w0vOHhTXitJ>?Yy?VNA/^.4N(>]' );
define( 'NONCE_KEY',         '2K=,XmEdJ:O(kwp ;Y/icU@[j5I&bpS2p< w @obFuG^)u*m$2)PI`Arav8hQr:E' );
define( 'AUTH_SALT',         'BFu~K8NUdG?ft]dR3GRy, 4k<`hrhZk{|=`vS0H-V*j[G4w`&(D$2)]S=DZk*Ok)' );
define( 'SECURE_AUTH_SALT',  'QyMZ%>5p!NPs>(/3UbnGa]34YqLKKd.bR*!xE|/RjK;Xi>B)pmt1Lx@SwFGlm3Ve' );
define( 'LOGGED_IN_SALT',    '&rM-S?n><A|`] }w}]x&r6;?.}q+avEj_LkfB-11~~Mx@Z?r0r^_:^$LAL&U}V_a' );
define( 'NONCE_SALT',        'Xm?5<=f5dLJHQn5_!lcvK9d:{`]oYGu$X#=>}ag][.W.Uefj1vKhY9W$SFV[0{~z' );
define( 'WP_CACHE_KEY_SALT', '<+OrI@7}IX=e>>j.&la:K7#gVzsY<zqyqE:MWq*E%{<TPBYTW9EmmKz18p}G]kNr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
