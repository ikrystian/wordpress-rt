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
define( 'DB_NAME', 'wt' );

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
define( 'AUTH_KEY',         'y>+t*HF=(+nJ=rFFB}HvLG6-1:4|pMA/D72<S7kHb9v{(;]Un6:#DGAZ5[ iCm[Y' );
define( 'SECURE_AUTH_KEY',  '*22))+l!LFtxwg~GltG{k=<Bc:tJD@1H+kFs@>ZdB[`,.)%-e1><l*!tZPIek*cw' );
define( 'LOGGED_IN_KEY',    'OBQx(~e65Bv`{$Vu9 $baq x@*YY(|Uw*,~.QkpTJ>.0jVdN&uqB0{5fGl/fGBIy' );
define( 'NONCE_KEY',        'M7}@q;@SPi0[Y5=?AP_l=SBtAn^4?KQM4RD+bugHvnt98.c_!.@7e%HYiHmC3nHV' );
define( 'AUTH_SALT',        'oY:>ytPRQImihgw :2J0;P&Z)Ob05CBY~+c[96=+ZT%|!>w/<A7O~3U2@0XeJ{rA' );
define( 'SECURE_AUTH_SALT', 'P0yi1pOyL<Kba:B-(b|M h<AS9{g_C#2EUKL)P:us(rA+~oseTMg]y<2VoOA1//e' );
define( 'LOGGED_IN_SALT',   'w_]wN5A01P5.; EO<DFJ2+#BCTMcQIKDW.$W>43x%3kQKD>U7BpD<NTSI?A}+/w8' );
define( 'NONCE_SALT',       'nhn SZCG^Hq@?pL)FZd@5.FSDpzHTpl>MXD`9-;NK.@!:k)j6ieG<u-es)E&84bo' );

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
