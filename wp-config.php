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
define('DB_NAME', 'wp_2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'johnmark');

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
define('AUTH_KEY',         'm-l1XUex*Gfiq7KTJW .|(A:AD6HzB: -|mP3N}>NCXE2EljP[;di9)(_9b)X&Ln');
define('SECURE_AUTH_KEY',  '@f`mV!YtUTq?:Y>[+![J]dYEz>y[x@H|G[R:D?1}x3t(4X9{;3kr#z+&X)9sB3TU');
define('LOGGED_IN_KEY',    'Eg;?DteV`-lB_{2];vTC9iURQ!-uL2]:Vx!Z9FIo`._2tIPHE+d]3S*o+fFuVgO&');
define('NONCE_KEY',        'W!36{9//u~+=wg;j$1AA-%UI;gx[o7&F[v-*Zk-@u_~=+r_4_,L:Y8,R>is ,0CF');
define('AUTH_SALT',        '6SrG},rXA{Ym+&Ry{^RF-+2KpE4EkHxmx+/iLX +zJk-$|`9nzr%d <g-kXaUNWG');
define('SECURE_AUTH_SALT', ' ZAVl:36-92}CK%KH*dpb~$A(x`]U{/-,F7 oAo4Ty6b=~U:Yo$Q( %IH|OsyQ>[');
define('LOGGED_IN_SALT',   'Zdpqp[9v3raKi[)d>~St78 #=qyS-fBP1`f,@43aj%RHBy[ef4/M<?h`NQo#7g=K');
define('NONCE_SALT',       'KpqpZw&IVcI+)35Sn!!QG>G++&{}eZfRoxB:,&j7[-{|*M%fjt*Lp}QGX6i,)2s6');

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
