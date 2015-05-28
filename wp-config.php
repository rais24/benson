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
define('AUTH_KEY',         'X5JHxEU3I.aCG*inpx`9Z;JAQ<n?G$oxs9_YR-O/Jw(|oAXH` +H@7,m`C8ez>Z;');
define('SECURE_AUTH_KEY',  'ab[+VTrErII-.R1T^-H25qJtptK2Gf%tG,KuYc>+cl|;0GKm@NoT--4*O[D-Q~WF');
define('LOGGED_IN_KEY',    'H*,b!qP>>+o(a}5b%@8VW7cFD,J5UXOE-,rr,Qn)0Z11J`T+#!*ddc)hyIbg5vIp');
define('NONCE_KEY',        '@r|Zico o1ADuK3$-/;DY<|*sNy6B/m5 p!Xj<(ujB-q&{#FkGO*5*-2`c<9188B');
define('AUTH_SALT',        ';cr(q?%4>(7+ePOt//,-}fCAq+eb=bqjzG<!b`wDd8OJ(+cQuiSas_KoR-,fHx!%');
define('SECURE_AUTH_SALT', '/_nebRkFi3hA,8|cTXC8/-|cF[zWN<:`m,rbfHy&|#S^~B~B0Zq@h&>S:ZsZ6mcM');
define('LOGGED_IN_SALT',   ' D^<B1-pDpaGg>sX8Q~^%AxuE9ugX&jJV8,C3QI|ld;+|O#t3]UlYpK;Y.e+I`)b');
define('NONCE_SALT',       'p*$fvCv0SDWpvL*m/F3O3)9-DE7N|URnnfF2g+$I(0.G6<[R NUyK<&fE<c*xKDR');

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
