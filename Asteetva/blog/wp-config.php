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
define('DB_NAME', 'i1498644_wp1');

/** MySQL database username */
define('DB_USER', 'i1498644_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'D]xms]Lcb~Pct#bXgO^01(#3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VynO4mgHPEptxEEr7g01UD7qvx7hljNGTeOT4hPKhxPetLS5yc0QqkoaK0JHuwEM');
define('SECURE_AUTH_KEY',  'orW0rCSDt9wqoYoCzMZUrqYpbWdqBbCA2JxS8MLapgZyV3d9SyiU7RkRGdgeb1Vo');
define('LOGGED_IN_KEY',    'Yjl5YxCw8d3GydV0ntHHIg4LJIW5ghIAlriLxZtNjRAuaLGgY33RT31lIbSpIPTC');
define('NONCE_KEY',        '8juDKDkr0iY2yKfqoag2QOSNx1EmEV7J8hxdvrdgf9YKy6tJtczb8lUuZ42KVoay');
define('AUTH_SALT',        'zO1ih9SsK6bRVHQIxRFNoG0NkLVzCZxV2VmcFS9l0AKteyf1ezCY7wSNVbkCbukN');
define('SECURE_AUTH_SALT', 'L9v5K30ca7vVFpvAu6TJu3S1HXHuz2abgP8ipeds2RRoKmKogGvJiIGTAU4vp4sg');
define('LOGGED_IN_SALT',   'eYP7sqXv9QN8ylyST5PEEctb4xUvNAFpMBAo5jVMQLLoHQLaULUysdJ2iXXsqgdE');
define('NONCE_SALT',       'E91PvXwK6WoJJIaQODSJJ4IFgXGwFACB180T1vzypAbdCiXCaGTSbLdS8I2JH7Md');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
