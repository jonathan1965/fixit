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
define( 'DB_NAME', 'fixit' );

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
define( 'AUTH_KEY',         '#)T(fD6/yuQ#G7=GVYBrV-E!|^upg,Vmg*[EpMW:ES>64v`O.<(2?feHr0Dc)Uvz' );
define( 'SECURE_AUTH_KEY',  'h({L^FKg2$T5R~k}~u~!AY@sn7=2as;2gS`~w3>BC1L-x.)/CV_#|H<,coq@zI^{' );
define( 'LOGGED_IN_KEY',    'J/6wq?h:oR%s/x]XQS+%PGPn) 0+E2Wu+CV,!x>3Z>Xbfb;]a}J?T.;y`IG:|:8:' );
define( 'NONCE_KEY',        ']3fBG7wx+tPU-D=5yhLlX)Df0-{5YvFkMNkc&PfT@8@B5~z)sK7M]A]{s|0tuEkt' );
define( 'AUTH_SALT',        'LTere{@mfZ{.)! u~oSED>|D87IvALqZ?Pbiit_<|T?VqiK-7]<I-m ,2ime?Hm=' );
define( 'SECURE_AUTH_SALT', '>z*P=Dx{@YT=k; ~f~~plw9DNoMU$ArLzgFT4s38,D~3!Zj. SZxO+jndxpxgg_d' );
define( 'LOGGED_IN_SALT',   'S~QEDIa/r_g*^_h`#<D3DDxxlG?g-an0<*Uv*>5o_4K?*Q/-<G^K{*(qk)xdiI$e' );
define( 'NONCE_SALT',       'B~{KEVFK)l8Up41 9U87MJIqE7EHo T}8WVIyDvMJ%XXY`V@?)Z=pP6b+~$RxBSa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
