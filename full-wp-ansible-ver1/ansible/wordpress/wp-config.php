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
define('DB_USER', 'demo');

/** MySQL database password */
define('DB_PASSWORD', 'demo');

/** MySQL hostname */
define('DB_HOST', '192.168.135.121');

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
define('AUTH_KEY',         'LyfS+>/n|b,?4*[hH+Uf}w$kb,}<9R<5:xo*}0RF*?YM2!f+|oa*4}v%<wII97w:');
define('SECURE_AUTH_KEY',  'aEvF[t<X32{{/;/fI~>`B$%<eP$GS$oP:Bm,}pw)l1r`nlT_%4A1cxc&MquMrZ]X');
define('LOGGED_IN_KEY',    'f_MnqD)]hf]oLS3@17;p}(rcSjM!&Iqg3suoqXQC~x>%n}<{Z8:G/,zo*K=wH0$U');
define('NONCE_KEY',        'U*[uG/>r{lHqV.b @MkO<O$56D(5i~I?O]`7K|V(^FCQD>?`OTC#Na`QCh=5;^g)');
define('AUTH_SALT',        'gB%`euuesrSZy{J6tM=RcR)3bHsA/U=GLM&7[w101^brynjH0%F!?lRj6%]]7!Y=');
define('SECURE_AUTH_SALT', '!.wawRW~W%WqBg;itTRe{:T:2b,RO;`4i-BIT;(~Q3E#Q3r^D-!JYV>;`Jei*hI?');
define('LOGGED_IN_SALT',   't-3{aAXbJ2+ivK|0c[}h6k$@$O/jH*>ZiPtEeq!mND^?8_/S5+fno?@UMcEN>$q+');
define('NONCE_SALT',       'g!k:?l cTi0l2z`H+@O`;47(eV~]=TO0n<@=V2??G}9Z.vdunjR?wtML`MO?xot~');

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
