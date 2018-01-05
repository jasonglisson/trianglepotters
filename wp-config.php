<?php define('WPCF7_LOAD_JS', false);
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
define('DB_NAME', 'jasong11_trianglepotters');

/** MySQL database username */
define('DB_USER', 'jasong11_tri');

/** MySQL database password */
define('DB_PASSWORD', 'admin2abc');

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
define('AUTH_KEY',         '#s#7?jpu3z.IgpjI7m9jUQNHjEvQ-i?3Az2*,yQ /;x3`(F2223x<q_8h,40Z[xh');
define('SECURE_AUTH_KEY',  'ihxf8I[EdrvOz1(VY8bykg(KlTV2$i3VJK(paAmSu;NS1i0JQ|tuI; sy0!C3g^B');
define('LOGGED_IN_KEY',    'oh%^N5^1K*L2e=Bm-t{twwyHX*--d5.CJ~,Ao(eyBZ^$Lxo#fO/MB?4b[Yl%8p#+');
define('NONCE_KEY',        '#JoXq} w<yjhDD ux?m-zAjF[%YGtZRYqKy<|v{U:nmIe6,SlS)|3wyed5ObYXhZ');
define('AUTH_SALT',        'PH<&hyXI]G^gTID5|dra]+:%|5G;y(EIx0Ppk6q%:qj2~tvnS:4)/5l1bYg <>b0');
define('SECURE_AUTH_SALT', 'JeS_YZeR:VX,OyOR.[,+=lt^{T}SZ|_4A{-5f8r^*#CK6h4xw|D</s}&la=N#&Eg');
define('LOGGED_IN_SALT',   '.jS.31|aC%HsDio{f|WJ1w|l> :W4R{O99v*/L4sFWr5Sw-FM[Lg~VV+d,xmr[Xq');
define('NONCE_SALT',       'NU{bmw_sjmu(Uv]d6dGlNqC/#$5>)(TSYG7H%xU`FRAkX;:!]wcpYKrb^uSRU GS');

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
