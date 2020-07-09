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
define( 'DB_NAME', 'rainsplat' );

/** MySQL database username */
define( 'DB_USER', 'Rainville' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Scotty14' );

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
define( 'AUTH_KEY',         '5S! ^L 5?1t6]u#=.mF@B&sH#E/`!1ftEP9illl%M,Ca:O)6n^*8Ol RT?3Lyhao' );
define( 'SECURE_AUTH_KEY',  ';z*x0o8$H&^U]+k-J9]sf1u,6uC1D*TW qfC;t4s(Kb,# Bt6%7Dvhe^t+KB?M3D' );
define( 'LOGGED_IN_KEY',    '`ovwR*lcR7dx@0a%y/5/SD5kHT^;M2UhF*cY(15-qD?(zF }^>a1)y&=;&Zy$BT@' );
define( 'NONCE_KEY',        '1ZZuIii8cvTzyL4H9Fi?U2;l 6<}M@?SAK0*sB[Q~G(7P8O(+86OvHE1OyHA;#Ca' );
define( 'AUTH_SALT',        'BW+WUgQZ9Z9u+5_,[fx3jhovVj:?P_T{waB*fDobZUuw(QV,)_b$8`:tuPH:(+:C' );
define( 'SECURE_AUTH_SALT', 'N+}X3mX-m+zi1}]I9/yG*qqs/4^_ok)dY:sv9p~#dO}Tr9p|!pwTr<gZ-bw[.uC{' );
define( 'LOGGED_IN_SALT',   '3i0NyoZ+RfuT%^v?@Pf9xK}TMZCb,3y~xFAj|amAD3_yNqnCDVX][_McV`09Zd0z' );
define( 'NONCE_SALT',       'efqp3:U=_n=n!DeC}g&{S52O!(=R?3g+kgieE3W;|MADe.:A5#w#:2@zqR*PG!Hk' );

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
