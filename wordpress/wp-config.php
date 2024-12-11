<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'jerseystore' );

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
define( 'AUTH_KEY',         'x6/4$sHj]do6 Ml`5Q4__Q=?GbOSM{f(D:Z9o3noD]IXI+@p_$ChNL1P.]mdc|(g' );
define( 'SECURE_AUTH_KEY',  'TB=|7DgL#V8AqTDv+@waf&fzQzN:e*66`+V2_tM1,P$Z|HReEcPL7l}efQ09)~da' );
define( 'LOGGED_IN_KEY',    's{ioNw7Gw_zfw*?n-&FahI+TPQQC(gR9f^(ax`JhET}}$E^eZgVGyMIkhuW%s0g_' );
define( 'NONCE_KEY',        ' z}sS%=3jgjh{F{4gjm`Z>Vs3$HB7XV-V#~O!7- 6D4Jj(0DI4^86>[Wm5_PrO&4' );
define( 'AUTH_SALT',        '&D)V@Gl: O->itAXQP]>.[</nc]M(hTr#?LJQc%F0GZ^x/x{z*x,DTTv_Ch~G97^' );
define( 'SECURE_AUTH_SALT', 'E2+/A*^t8F,G0Ng:{VvqGFUJmw#Xq-`o2WWpb:)eu>>;zMuqoyQfbVHj;(C+1Kl?' );
define( 'LOGGED_IN_SALT',   'mL%AbVB0K=5GV?fR%bx@4sXlx2dZOgm2nGWj%gXM#PC[sx]N&07JZxNb6Cc,5W<!' );
define( 'NONCE_SALT',       'xx-Nr>$;c`>i|GX*`kY>9K 5/o6wBM&$7jDEQb,xrP axcUv1AQ4DW_;A<]uOyLQ' );

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
