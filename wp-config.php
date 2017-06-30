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
define('DB_NAME', '7awy');

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
define('AUTH_KEY',         'zu$U?ug(LDj5dlZfqC,mM{^%a@nn*8B#ZU~=Y-RejM|Pg!?&M/*BCj^F&{Q a[|_');
define('SECURE_AUTH_KEY',  'M*2-TZ(V[ ,x}Zz8zb6ya[.#4<UfuB0l8V;XVw6@YL92VKXIN8A!/L8O>nuL1VJ_');
define('LOGGED_IN_KEY',    '.$N>GCJ>H^T|&XmBAN<c@z?X/:[Mb]^{XSLIqCPFIv}v~Z}{JLSe-zCd1JD& .iY');
define('NONCE_KEY',        'qTcic6ylI*$pUoDMIg3l>o~p)S|Yz4b^PrV{hJXxj(&Gh+yjGx}_*1tdWdJ.AS%c');
define('AUTH_SALT',        'lNv%[;doAGq#*CWZnG?S8{5<:HU769#WF5tnmu6|oQFO0[FT9#902.{*mB@JOzlf');
define('SECURE_AUTH_SALT', 'oKZ6[VRvtWMJ?#vVNO<a[E>2XBv[=E^K3HV4Ie.akk]qIdF{,0-!M$0dN/V 5vD5');
define('LOGGED_IN_SALT',   ',3T,F[{]@W=410BqZC&}ISsqFw;kGq-@ d;li`/IPOdO.l8xPW<8@MtY_X.<M8t,');
define('NONCE_SALT',       'YYeJb*,Loa9PlBX]Uw,C+;]zu5Pt%_.s/nW>cFFpt^z gGg<:jCpr~MQ|^/MNkym');

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
