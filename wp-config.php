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
define('AUTH_KEY',         'yG#ifMiuud.6iR@1Sr]+JiX41LA+-bYqJGv]+lLkL2h7E6: <fr(ksd/AfS~-x[o');
define('SECURE_AUTH_KEY',  '}2!*3yPEPw7HD+6rfrjG9w/3-(YC8<,6>Co>:H1Y%u2EgV4J0TJ[T!_0#&q$pK/#');
define('LOGGED_IN_KEY',    '<BE lo8r1=mjt55[i6sNTW;W4^k/BK0= uGIhwy6i)cDse9:at`0dq0mv@@w}}GS');
define('NONCE_KEY',        '?F-wm`Eo_qzEn30~z/u}yLga22RvQ$u@9Qn2m+a.~@H/Ge(bs 2j iU;=US}rL9W');
define('AUTH_SALT',        'Uk%]A,[kGuO!o|cPYdwR?/q23!;9 ~e@C-$FWvgixs<]y~7#.52&giy,d=zw$@z>');
define('SECURE_AUTH_SALT', ' BBks#6VTMFRFrK)$!j,ssF0e+N%F6{R&CD@SB/h;F*dr|n0J)AccuSeA:PyW*-G');
define('LOGGED_IN_SALT',   'do~pAp{A<MUf$O>U-=}s@zJd=rGb9|{Zma_NP-2,h`/xt`(U_HSv.p=Dfy{g01H0');
define('NONCE_SALT',       'D5n3@V:O]tT8HH(&(E7lcTPU[a=o`taK^zk,rg8B1xriz$s s{JKm;bRXQ:$+2a-');

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
