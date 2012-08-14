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
define('DB_NAME', 'ubound');

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
define('AUTH_KEY',         'S1go>4.)na]s.GMlF7#@SB4o=LW5s3=;kyE<n1T._O/3~v^d0o/l@):2QrA)kPFx');
define('SECURE_AUTH_KEY',  '2R$4a5Dz1n`80WqbH4[,2:6;77D.+nNF6QF=M];n45Z:iXrx}Vww^qT`Vv$9<8ck');
define('LOGGED_IN_KEY',    'IljDJb8@O`#9AA4_A-/iOn+v*u]B?yvquucMDCiHBT+HpJD-0cx@YczC%&fM<]@M');
define('NONCE_KEY',        '/-G<0H`P7_va(escl9;lYBARx7 K9*B;.[OGIMm y??HC7G~r[UJd:|1lY]<3z>[');
define('AUTH_SALT',        'GJKcLr-x+S`lc|L=H34vxvt9eDEZqloA,W2>11*97_3R:C;T3a@/+M2i?8HT>=K=');
define('SECURE_AUTH_SALT', '+%^>#AZ}1g3Xm8ll;gIJ&i+Yt#>~z>ZYg+O+j_8KBNNt&$`x0tZN7aG5~Iw1h)Uv');
define('LOGGED_IN_SALT',   'JSz+yyBfy)sKJ<M.zwN.L?h}$}.T|}TnsAE~5pF,f4R25zkYW:DFy%{.-.`UT2[5');
define('NONCE_SALT',       'VA#t&Ek2zpwvf3s:`0ods}Mi|GRl69TG=#?ds9`*-_>H$EV@hf~[Pa)b3RV=r{x(');

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
