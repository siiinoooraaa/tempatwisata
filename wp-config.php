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
define( 'DB_NAME', 'tempatwisata' );

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
define( 'AUTH_KEY',         '; [}arhxO)/By.aKb]k+Bi?MsmaweCYu^px<cxD,xBpK/ 5dI~v)k:uGMCbJ/07n' );
define( 'SECURE_AUTH_KEY',  'b&W`K0`46t4`A8vo:lPL^*Jg^#1X;_}AkeH,#}l|Nd_Yp/vDs]A]jmCdY@LAm7I}' );
define( 'LOGGED_IN_KEY',    'w^uts [vJir`y[NnuJVs6JgXxhbw66j`d;?ODl4HsTkjbbi`H!ugtDA?;x#s$dsm' );
define( 'NONCE_KEY',        ';.;pOmLO]tYc*zS],/2XL&`8gnb)KfK[lI@1moBo>FhCilh?& {F;g=1)#E;FPB)' );
define( 'AUTH_SALT',        'rl_ayR&eGBFG2B}Dm{>c@VWBJ>dO*nHy9PDjbD#[y5;8{{]J0<hZ27w8QCs}H`#)' );
define( 'SECURE_AUTH_SALT', '$HsVzTHAkeZN{FFW?!XgQv6_+}e,moB3xg~e`G7B38)%_[9P.mgB4YxXAB`J>E#5' );
define( 'LOGGED_IN_SALT',   '((gAOyV$hskR8%!<T-,F+0BGhT[@s>VmNCOh?4^c5,HCXGEgwIkY-Dw/Xd>Xp[-:' );
define( 'NONCE_SALT',       'd7,UYH@03eeshWxG{58A`n4bW?r]@T-eJ)L_mwzak@(}1B6gCnx2c]!P)|]7F}t&' );

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
