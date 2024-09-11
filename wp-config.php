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
define( 'DB_NAME', 'radiowp' );

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
define( 'AUTH_KEY',         '7w&$yHzmd~c*C42/]K=,43Ca{nUwQYZID98`mWLKw9?*vRcP#Z$(.7GO-M!YKf)5' );
define( 'SECURE_AUTH_KEY',  'JYZ`)B>Ds7Lf,zB4.i?m[W$4`y~-AJ;TyjDbx{h)dJ8YjFdAghrtoVTg01tw-uS|' );
define( 'LOGGED_IN_KEY',    '?e<GL|.+%`3B1_!cq@ZqEV#Yc<[b2uHm(;rA9xDN2Ws{a#w^Y)K?RFyCjJGwRth(' );
define( 'NONCE_KEY',        '?=-2srTG?g7r~oHprP|Jp/%6<u<w6`6D-i/[r#dY|aa54k;g<X5C3 +4eY}%<STl' );
define( 'AUTH_SALT',        'ZBOgnsO3f0;R4]c/:wbi89OlpV70_liD%J_}UR{)jMtv9WK_<iF7MTZ-_{drrA[%' );
define( 'SECURE_AUTH_SALT', 'ef|+&-k0Qbh<}Tl#th6:;bBU9]P)XE7q> TBMT<kB,XK$frUW?j`d>-b]a=lecZ-' );
define( 'LOGGED_IN_SALT',   '4I-b{DptzG=>>k^LZN6,v0p4~7Ygtqyb&r*|eizO0*^.i;xHV5|)W6B@yU=jL}J`' );
define( 'NONCE_SALT',       'e]wS nxJ^}1Q.whS,[*Z4RDY;uh7}9ZvT;OQp%S %j+{M^Y&,v}XQNTq$sf7]m%K' );

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
