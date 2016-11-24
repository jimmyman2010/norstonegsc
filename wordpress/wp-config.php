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
define('DB_NAME', 'norstonegsc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'OX[8|Q7F6RgNO49sCzyKE1:/_*9C| Wj-[R+1zoB1rc|M`(/OL9 }xskFQgK-t(!');
define('SECURE_AUTH_KEY',  '{ltX]+=(g 2y4dERcn#,1(WTZ9j{^qZlgxuOHhi)8Tx#bl%&p))gEv^qJ9a_vf v');
define('LOGGED_IN_KEY',    'H_WWtIhV,,9oOMi}!>q$ aFF|cr|:)>/TC0#/r2!<Q wG^P9%-vu>zjI>**[RziR');
define('NONCE_KEY',        'kZl_7rJ2yNOO5=G!A}&?a*T![wmu@lPOO+5J;e#<]EG3Cv7t,Yu^Gy|~D]y)Un1+');
define('AUTH_SALT',        'or%ip>65-Z!Ed60CNefJQgY3GZ7 c[m2e8I^3owZ&<qd}eC*A$5<4Xh4_;W~d,g-');
define('SECURE_AUTH_SALT', ':4dR>#s}3}RVu#XR1#bUh@%C6Mj105[oN_4DmY##P2/;^k)uQ%j$%&7U/*^e6VcL');
define('LOGGED_IN_SALT',   '-kxxk$d|(mH;(*5mWY?7RPIfe/rz2I/IkBa _@z=T44,n;Fn&Z!DdDzQsa_=b/.$');
define('NONCE_SALT',       '!8t*AA1Y93p?AGvKV(n7A@c4LoYh{<GUh`nY|%+t OezD_O_G^A$UZ1u0jD]lfH3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ng_';

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
