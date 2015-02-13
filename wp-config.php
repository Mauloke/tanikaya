<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tanikaya');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'supermaul');

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
define('AUTH_KEY',         '{RQvVLjOJy&7YDe>7qtRBCev+H1dh5S](?|LIYMDq[x9,rr da0Y5V~M}8sh)`3a');
define('SECURE_AUTH_KEY',  '=?(84C4YF<R&9s5{4N/J++TB2(8Cz<[Yz`H{|r44wtU^f4b~n4~S7bM-zUL&t*[f');
define('LOGGED_IN_KEY',    'zuh~=RU27oeRg2}lEH[J?`#-8*-xj+~[N:=Fb0V wbp=JW5-&*.J|#Z3SL[lg,t:');
define('NONCE_KEY',        '[w+089AsUgq{%49NeMsxtaQP%p<_}xrX_:07jQQ=|?3Cac_M6ZVOeD9I38=}##6E');
define('AUTH_SALT',        '_t?eax8[qrGq h Uo#dXD/wpj*! m%Bj`J_%fyz31a/?3.OaqFwfE5U5Jn1/yexP');
define('SECURE_AUTH_SALT', 'gOxn;3Lvv{2NE,Y9/m@#~Yw`^ImM=Lte`@cF]|6SHx)o}<)pCLOmIFk0;8+SK%&3');
define('LOGGED_IN_SALT',   '<FSf>9&Y{0s# ctJvF:]X}J$>vNx5haiCbUM,|$rG-TvZw#/u{ha4Vt0+.!ot7&D');
define('NONCE_SALT',       'vHNyAircw5?H5d-:+,p~lLPX_Yf*|7DEcK^wx$U;syOv;Lz(V5}R;FDk7l~*IAn)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
