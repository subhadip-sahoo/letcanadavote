<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Letcanadavote');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gA=!NjDB2CqyvYQef4?|s[[f)xA]8Z K.!#A%D;JIj!S^mGQ[c{rSK*>tUDer2#U');
define('SECURE_AUTH_KEY',  'Rr!#so~IPQWq(_GV[Sg[xA=T;j3t6o+td+D+C(cT^a|WnDWei!/;;ObFve V_#z=');
define('LOGGED_IN_KEY',    '.v,BbN|d~Euz@e:DVOzgEM|Z.:k(dqNos^nZ)1%o?L+}.E=s,f1-+5M]r8r=?1E~');
define('NONCE_KEY',        'cPo4t!}OJ[,^63~MD+<(~vw/Vim8w-y8}ubhMe>LkA28+v{CpT_}nBB?b=Gpm:vv');
define('AUTH_SALT',        'z>WVKS,oD19++<W3uKQw0/G`>Kr)Q~~30u{i_qJEzSu{YzZo;gIW|(xcl p]B1Na');
define('SECURE_AUTH_SALT', 'jY!_/k!=rHH3Xdvyj}UhL~||A0ld1[PdgJh]$<%Qf9g@0bpvjS5LU|XM$&Ih{k:+');
define('LOGGED_IN_SALT',   'ck`b8s)8+l__I4roI{@{QiTY77}E}W;@/A;)aoA^i)ZBInzyr#Jai--+|Z4rG@H-');
define('NONCE_SALT',       'MI+G#M1:Ng*:yU||4|_ (@qx_+T7VFLGfNg;>P>-ri!B5z4yYpfOz`6n$Pe3&JJH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
