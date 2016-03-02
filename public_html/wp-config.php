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

/*
 * cPanel & WHM® Site Software
 *
 * Core updates should be disabled entirely by the cPanel & WHM® Site Software
 * plugin, as Site Software will provide the updates.  The following line acts
 * as a safeguard, to avoid automatically updating if that plugin is disabled.
 *
 * Allowing updates outside of the Site Software interface in cPanel & WHM®
 * could lead to DATA LOSS.
 *
 * Re-enable automatic background updates at your own risk.
 */
define( 'WP_AUTO_UPDATE_CORE', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'surferdu_wp');

/** MySQL database username */
define('DB_USER', 'surferdu_wp');

/** MySQL database password */
define('DB_PASSWORD', 'lnxK31zZ');

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
define('AUTH_KEY',         'zR7EbN566VnFrWgzNVydRGvA0_NeFqZr1gnYUDHQ6EgbAtQiGxo7DAEk8wx_fgD3');
define('SECURE_AUTH_KEY',  '5ZWzOnByaXVIG22wTTOYCkCyJtWGbRBO2BYyqhPNv0V1czwTC0VCuNA_VNfBaznY');
define('LOGGED_IN_KEY',    'cbJmD5Z0AEa7eRZ_9_f3vPX2ODSHM5p0a1935cC8t3UW2lAbxexcf1oUNZMYa82i');
define('NONCE_KEY',        'NJytUj8kYEadbNEJP22kNG7o6RNdE6Z4F1JJhkNWlOL3_k3hsOueI8tmPgtYMEor');
define('AUTH_SALT',        'o5S9diq4exGzrSz2AuuQNhnYg39ySsQ27nHyy1c2WIrZ0VLDET8t4LTYGdao8Tji');
define('SECURE_AUTH_SALT', 'hFmIRqMM4a0ErSP8YzZpzqitj8NElwKOkuyOhCEpLbTvCsEk0LSn6CHL3THxwUx7');
define('LOGGED_IN_SALT',   'jzDiOmMshQ1kWDU2dshLIToJcnO0opMXfd6SNaDS35ielh49ofFVrH4MRGwIGRwY');
define('NONCE_SALT',       '9QOAzleps1GUJZ0HfgH2haB74AkbcecGuDfl__bH4ULzVMI7agT5NflU7fiimiN9');

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
