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
define('DB_NAME', 'lamare');

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
define('AUTH_KEY',         'Jq56g6Z.10;O;PPy.?:*1%KleGsKGz^?Nms^F:YcbY1T>V?Ap5VR2jI7=J=/h3y`');
define('SECURE_AUTH_KEY',  '(A4lr$/&iv3/zp+2!Jxy-$AhM%rUoJpoBQqiB/u*.-wzuDw9O.p(.<P<j_Lt!-f<');
define('LOGGED_IN_KEY',    'IfpbW5norM;t&0[#S3qa(m0^F+lX:Bk@zOp|o<gr^AIBKeNdXKW&5AjYH>PYE[VT');
define('NONCE_KEY',        'D`H8~zlT]a3Jig:+g]wsL0<!2!U]CJIYBGP2xmVZ;S@TT5t7BZ0)V+_={RPXy-EU');
define('AUTH_SALT',        'qUf)lm0Huc:u5p-#!k{s%T0~9*PE-u.Y*nQf|DHwk[)i]w({Ymq-?26#,KKfxVM?');
define('SECURE_AUTH_SALT', ':=`i-B3gI:J(<.6[h_@g)9%);QO,0BN EI}LO- W1mj{!cDb3!CQ,dbGDMbTRG=,');
define('LOGGED_IN_SALT',   'r+,e1D;ZS/76LFc#j(*BzuYeW<oFC8l<nYq<I@oZ11=GU7= Swdr~_Vo^kK;!-py');
define('NONCE_SALT',       '|[NTe24Q1M 1seXGiBUXUO[`5ba8HOpo+&[GYKCULS8Sp>_a7?p3<-+4C4})[3Ej');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl22_';

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
