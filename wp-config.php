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
define( 'DB_NAME', 'sss' );

/** Database username */
define( 'DB_USER', 'sss' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '=4{?NdCadF#%p_V>]_~2A/lw:~(I@^vudo3lqmP|$LH;FUs9rwbs>V|4?KnsH{)m' );
define( 'SECURE_AUTH_KEY',  'MukwkKV}y$Jnf@z{-@e|_#~afS*u?3l&XI|dw=iC0P&G8F+r<s$C3iSDAU/7]0Sr' );
define( 'LOGGED_IN_KEY',    '/iSnAE]-5%4Ey:zx$>Fp}jHeB(M37}}7-:Ox6YW#t. 8Q9{D-XY.>DLekA~F|3us' );
define( 'NONCE_KEY',        '.p#W-]9(H#D3)m]&+-jS:@W wG`ryNI$YeOY$JcP[hu,br!gHUWYRiJMJ,u]|?:X' );
define( 'AUTH_SALT',        'Mm6:1M =:d}45Eh~YRCm/Db }V5kYPG!>^7JT~D+ELPB<?Eh20`&Gk2;%A|)5%!U' );
define( 'SECURE_AUTH_SALT', 'G[J 7eypy?_7fh].Z}!t zAla(Fydja]PrE|&E =efn6Kw_?YV7W`LO;u)2VzO$q' );
define( 'LOGGED_IN_SALT',   'oD+M_x+mz@Sb5ZJJ34r4~Aoh,<-Ct-oJ;]z<lqw:I=_z`k:>uFy4SvO,.I8V cx-' );
define( 'NONCE_SALT',       'VxKC84J@$(,&V|!VI]usP>@jPgU~;|+!%kg8RKIQ q*j.?2>CHl+lF5)hMj{)ngF' );

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

