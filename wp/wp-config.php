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
define('DB_NAME', 'test_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'php');

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
define('AUTH_KEY',         'U#Vq;NMV5m%[tc}R-VJMJOJTKe5kg lVoU-K<`Y0ZG_(+E*7b=hB0O-.JF6~fO,W');
define('SECURE_AUTH_KEY',  'epxnI+g{vV(;Tg?!Jegz11(`c4epE$|-]vnF-ro/t|%seADv~0WC)BCX dR7ckNn');
define('LOGGED_IN_KEY',    ')v_ZYX5a$l8/1(%)r1*)+Y`DZkH:)JmIyeoQm gl#B4D_K}W8e1~+ALRNx:Pb| 9');
define('NONCE_KEY',        '3NX,9t=k[$fJ*]_f]]G%= 7C)1FW*U,wfqjv/nDhntXF5qFEOb,~(bH}z1nshe{;');
define('AUTH_SALT',        '+xJb%n-G#%+#/x[IZ#AWpU,PzW)Zy;D:_|!NEjT.8bn:WJvvDM^YwwNX8*5Kue5h');
define('SECURE_AUTH_SALT', '2Btdv-vv?&_-d#af1E(c%KI#|%OEZC4.U^|MWHl`^8cUN+KBh}S$[+;rEU}M=Gmr');
define('LOGGED_IN_SALT',   'w<50+Xz,x;:lEtpaB>A^c}uT>f^}CTF6H(*f.Ou+>O{ERvl-#&BTU=.acj6N8-t5');
define('NONCE_SALT',       'tUN78-deO(>WF[~|dW%CVlfly.dg^=ssT[ $g.)I2duZ:VHwGAO;`SsW*CEoPc-?');

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
