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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf60_wp2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3310' );

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
define( 'AUTH_KEY',         'gvzSHx#W6xPGpNBoTy0D(O9q4xctn>Q+,w]t~Q?-w=.=viRU{MRsNcbQs%#=T>4*' );
define( 'SECURE_AUTH_KEY',  'coZ>%N^5/ru:hGrK~yl1Nq2v]<jqCRjZzZi%>:X9aE%0%``%IkJ(v%N4DQS<&(GS' );
define( 'LOGGED_IN_KEY',    'v/ik|[.NFA{eMW`+~HJ^3IZ!O8COt`2dT2WJn>{,,sLF?#7UM2Y$1Krht%&N]Z.;' );
define( 'NONCE_KEY',        'KTy4*1kO@:npps0u% [wju$!-}Y:7d)<I3|HwHK`+xGe7BIx)fiuPWd>*XkOk3a<' );
define( 'AUTH_SALT',        'Vn&$OPX9)i1r/4.yvK{aY%V~Q}vzY3(gPuH`Y@qy$`33$E58lWcUKv[iWRFDOuw0' );
define( 'SECURE_AUTH_SALT', ':tI&PI:sv4kYAG1$`$y.+Eyo;$L7n]Q^Q.gn~(/6*UWejy~{$,cxb,R+x]I;|SqK' );
define( 'LOGGED_IN_SALT',   'E!4G9k={Ayv)u4?]!Z8PH+bI-_$uw$:Ts }xe8T(T{Hb^{KiJGYjJsP<yK4{xKw~' );
define( 'NONCE_SALT',       'o`|j[@/swpKmJOFbs,(vYDG)qS>NfNE4qD]CSKmTqm8N /;]gNX&gIh02lDQqX $' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
