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
define('DB_NAME', 'leeprobert_wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'w0rdpr355U53r');

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
define('AUTH_KEY',         'Phh5#JN**+xT^?M76B95Sn>^3_M#i+QC,I0pp+;7&hwsZo%KWa~0?*$!8]D[,Ak~');
define('SECURE_AUTH_KEY',  'eu-UBrRcH,6b-WCfiIJqr?_=.tl4i,nU {]n(y+b-|G3sqYdkqq?d+*gSy6d0y.h');
define('LOGGED_IN_KEY',    '9dn%Glt6T>:IPG-<mmH}|LDo)PksB[iE9rJ&1)<x>|!t3gbWyx$8xU#[H!-c&<Fv');
define('NONCE_KEY',        ')e[WNbw+;AY`5H,Wz-djjEP.?8+<*HpoN (Reb2~U,R&c0%;vxIYUOqq$tX-T{Ao');
define('AUTH_SALT',        'pJtP+[4%x] `/)d-K-4-ap,DbL)5Hm;*b$3F[C#;QG{=2@umALXJO~ouFud<XK~1');
define('SECURE_AUTH_SALT', 'E:r{.vs^:X(*w[rXQm+4,@E9$!lfjdOjJu9sowEauv|7Ge%A#FO*COZC:Md]DGO+');
define('LOGGED_IN_SALT',   ':Y=bb>SvmogH2n|@uQY~jXV#M@d%LX|D8bBBl;q#}yPx--<+7WzDJWK*&%%D+Xg<');
define('NONCE_SALT',       '|`]Rt~Rfy_VO{oqy7-:h8*7t+tz(z$=-geJvm-37_)+6b 3rDmn,r{6i!D^~MSYI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'leepeecc_';

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
