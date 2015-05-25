<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'benson');

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
define('AUTH_KEY',         'Q,{q{3%HVW2WEksAZN8@&TP6E7(h^TCT5KL/.C~^y-2Ak,VLoqXN/`J.Pbv&|Yf8');
define('SECURE_AUTH_KEY',  '7>/o^W! `-hA37au{PoR]0$JghA85E yUb*zT6d3+#<qEf[lIgfau(YoUl9Y[W%r');
define('LOGGED_IN_KEY',    '.L=Tof@fLVut^5=KhjMj-0KA6/?YubEf)1D-U&mr3yN*[.=9w8:aQ(3c%i7#FxIy');
define('NONCE_KEY',        '+Cr3Z8*t@BtRLg`w/y8E[}g#k2wEFm[Hfn,nU930!1^R04_1Fegq^/AGd/4 u:<p');
define('AUTH_SALT',        ')D&m$V5$yOel?+>gZUJ7ms~-bH/-=oigNiI.UOfC>3xO1&@`$gX940?=50_QAwEU');
define('SECURE_AUTH_SALT', 'W:8y:`X[I^-^ML{d-M+9Bj=<;x-THXo#Bv^(0a_(3@9dO>h@Hs_B$Ym)}Jlu92eU');
define('LOGGED_IN_SALT',   '12z_alSqN>i|<7rL@KyxdN?lJaDL1bc<:PeM/<12lTo!QZz2z&;jBD:RRvovffqY');
define('NONCE_SALT',       'j$M]|rj| Wlm:(2l%5KZU?8B9o^f8:`RV(,A6RZiKu`G#+RBi*e@f=urG35iG^rY');

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
