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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '+v668fJRdLNLgmjyoUzZ/Tq3DNZaQDsizR5eHWkDqs472UgogijCaNUFA6nqQx7zkaMy6Wahg07dGEa37DgWVQ==');
define('SECURE_AUTH_KEY',  'TzDGbJKHdtYb+3mwX2f2CNM+VSnLoLmIYhqhW/7Rev3RqXEMoKNsQHeeBoHp91XGbAT+LZn6oVALrTeis56hNw==');
define('LOGGED_IN_KEY',    '0cuieY1pkhTWLA1Vsw3p7bAEL93fqNVF+3p51amMzlNzPBc5OC3kmFjpGtOBbcEYBhtvQM/kD1nDuh/SrlpBLA==');
define('NONCE_KEY',        'ZxxllYeorO01aw8kzJRw/mQfpHg3J5tkeS1jkUCaTBWih3hBisgKd9O3OQcDvgHl+yGm+gRRc2EUU6ggA2C0BA==');
define('AUTH_SALT',        'C8Cfzl22vshGaGSaqT3fVz8gE9CmfpiP6Pe2Gt6aqYwor/fRz8M2SUFcFsGj7SHkl5ZvHZsL6QJokX2HZx3L7Q==');
define('SECURE_AUTH_SALT', 'IPvhHDrnWDxT2pEJ1RsR7Aq6Is2kctThLRWEbEq7Hv8PrqrWxkrqjHmaCSifEuuLLZ322IcMCaFGunOQNugBYQ==');
define('LOGGED_IN_SALT',   'e4qXwiUggkAaLAjY3/MPxsKHFPjNbmAqz6947ZtzUKr+7z+dzs8B0YCPUtYAQ1AUHRwblHNE3P2Mwi4ZLF3D+Q==');
define('NONCE_SALT',       'PfNY6Mlvf9rZ46952vCNf/2do0gMVBrT44CI1WS9Fovzdi5eeCZc0+K/T4Jowe94Nn4MbJ3wfalHsU07wCQlNA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
