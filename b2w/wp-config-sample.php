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
define('DB_NAME', 'Health Builders');

/** MySQL database username */
define('DB_USER', 'sensei100');

/** MySQL database password */
define('DB_PASSWORD', '245T4gtp');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '4lH5O)  ,HNa.Up5C}}lx5mEpI^i>2AHi&sk8tH|=(Sd+|>-(M<FM$s0x*yDqcoE');
define('SECURE_AUTH_KEY',  'N@]jd]:rP0][[2vt1-Q~yjg-7^<>I=%ost,fy*Z8Xx3tA|zxjh0?H3EF8w9u9DvE');
define('LOGGED_IN_KEY',    ':l|t0:|K0HDm8Ps|P9ciNkyO_QV<|P;C*IFRlpu/~/z(Em6G1+=a{WR2`?xhU;]O');
define('NONCE_KEY',        'e8gZ2pV|/+xQ!,Iol2s0k<D&Z5qxcvtVz }NQO<M+4|zj2{%W2++cr=<P|v%M+E|');
define('AUTH_SALT',        'i-cC{|FL_5MfdKb=}C-((B))X!-=;iv^dyN$@QAe. )Mg-+gNsNJ^;@xkyb+B/WJ');
define('SECURE_AUTH_SALT', 'e=6J/Fw&5|5c0x*P-xKZK`n+[:~TDD*fH.V-9}~,atqJtzRYZ*m$%(j-0lbLzGd}');
define('LOGGED_IN_SALT',   '|P6hmcPEO~||[I~7E4<p6Wd8#8DMn+eguTBH+-:g< p#q81lg+]x+4F|`n6`-@b+');
define('NONCE_SALT',       'YWV.vtwwh!hQoO7Gsa+%aIYZHaS.Nd2Rvc){x4;z+)ECX$j|}i;^.+K&Dt,_QcKY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hb_';

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
