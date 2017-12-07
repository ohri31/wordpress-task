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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ohriohri');

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
define('AUTH_KEY',         'E%d>qIW3R:*wGpk3^0]}gIH.2Yp<C`%Y/!cZ<D)>%rA>{CoI`?o77z8M/$k@-JtS');
define('SECURE_AUTH_KEY',  'l`E/*R}L]U2( h$2vOH^{SKy,*|{B<eO%n$j@af;Sa4|%-dcDFyaZAq)?GwqiSW=');
define('LOGGED_IN_KEY',    '&#urn@O;5:KTffJ.o<+N fC}]r-*7=8}rEjM-@zYE)+NQs>hT;7~dk#=xH2;6`Vk');
define('NONCE_KEY',        'Pr!a2UZJLr:$rJ+DGzV2<Ijx,fLNh<1($Dt|{s82xe6NyfBGDp|kYO&K)bl5^ww/');
define('AUTH_SALT',        'y{bnTu >}2{a+{Xr[*P$^3Ii,L#sIJyKUv1^pY/RguWOK#e~qT$}}<^]jXyyLfXn');
define('SECURE_AUTH_SALT', 'kzX9lfI9fRJP,Vz1pGn5b]5?^>tt?6_4@4~=p@(.s+NUvU439Sh(EQ[L,Muf5eYj');
define('LOGGED_IN_SALT',   ';xVI8-$mXDChLcx:C?LKG=y9|twfeSJK=$H7n|XoweD2lcrQ*-+!Q+Gth7:v1J`I');
define('NONCE_SALT',       '{9U5XUyltsmICl%`kM#nmtu=EYwFg(-wdf5MdP=Y(3{RFf%pi]SE]bzZ*HW(0|@W');

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
