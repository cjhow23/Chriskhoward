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
define('AUTH_KEY',         '76h4K5ctFWxc8yOaHMd6NwwuD83WnYyh8gBuyrW19atP23v8YeOozVxMW1RIe9jd3bjryU8+slGUlVUOIwiEzg==');
define('SECURE_AUTH_KEY',  'tdYmv360IBjTzqr1rZy1iDtLKHGDydeFdvTliTXqYX4/3mx0e0JibSbGfyPrBWAUI8dLLTKP44o3qBNiKGKOOg==');
define('LOGGED_IN_KEY',    'zv2M+bDPhRiNdqUz0TReTDXhVL/1YpDMtaKGZKGcCl4lv20zZwXOXyO7csE4MkxVXjjxHr09ygGBPPVYw+FGtw==');
define('NONCE_KEY',        'IGYbDBEWg8V5kTkDPf5OEQw2ioYP3YtaDKZPBrHsUv3bnDz8+C92oqVOIW/qqT/pyIo6Dl7+9dlv/nlBbF4Rfw==');
define('AUTH_SALT',        'jWUhKdYGdtDXsNlzyeRLI5v9R5M21dHMDAC6UauK8Rs87y8zcH6NN3RkRPInfm/o4vJ0XLc0KRU37X7sXivepA==');
define('SECURE_AUTH_SALT', 'HCLTpiyfq6ldzuRiwv7OrTeneF5QN9z+a1h3pXE00R2u7+s525dbcd6oGSQTvseHrm/dJKAizJymKnmifYgl3A==');
define('LOGGED_IN_SALT',   'MHy4IPRFrcAg2KsPcshLR3wy5efGwfXlVH++eyKmY1jYUhfKvKlKNqiwGfaPKIH9Jgiib43KePL8qyY66BiYIA==');
define('NONCE_SALT',       '1rl6tT9a0YfyM2gRzyPjMzzzQNvOZCPHXUvsC2lqnlzVzhSKN12AnsfBAw2BfMUfRGwRrP9XUmv6/18gzW/wUA==');

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
