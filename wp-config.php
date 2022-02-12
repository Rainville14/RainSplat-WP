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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6yqfUaXS31HyCzrWlaVzbMi+gG/UCzC+5p++z7fskYRmfaoQMtg7HDeDQJSrT6d/7W850L7j2YRzvtgKxM9A0g==');
define('SECURE_AUTH_KEY',  'H4cY0EQFEA640yT0KkXwz8ulLoDXzK6hwn+d5G0Tq/gvugwF13UqHUpxnUaoJCVFk7nXNTwiEGvUDtnC14Ay7Q==');
define('LOGGED_IN_KEY',    'Ea1DpklSFuOoG2EHFRUSOmlxiXFsNv6rBkmHjShShBFj3C4N0NAOkAKTq7izL4GnHSSKJaGDkn9iIBqNWmUG6Q==');
define('NONCE_KEY',        'r7I36urh2Qx1ej0cOcEHh/dkrJOggvY2iwCwjwjvjGT8eAMmNDqucSdtE4zY05CqdYBEVfXz2XmViAXPV4ys8A==');
define('AUTH_SALT',        '984wWQDks8c1uddV9PBD0Ra8WZktnPnEO0pUZPlPDjmqeLx2raVExnn7Mo89uwYsnw62ZQd1e+h6c57jDbIu1Q==');
define('SECURE_AUTH_SALT', 'ugidDWySw4X/NfXq6lQslaSlDHctTu/Biz3Sp7gUlzy7TFZ9g1OTQpeAoDHwddI2uYhq3GcnDQg3nmPHR0AhfQ==');
define('LOGGED_IN_SALT',   'nhD1Ht2pFYRowQJSPVBcuXN25+ERhXC3a1yGB/TqRwIPmi0JvvvUcpr0Ng7Kseg7Q22Ar6c53iqZ6mI2nmWOsg==');
define('NONCE_SALT',       'LZZhmj50BlbrDrwysiERuyzahJ1JpK7QUS/jHPeP8iFUQTxZD7pxhUbSckhtn31NHTRs0KaAb1Vd23XaSK6RkA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
