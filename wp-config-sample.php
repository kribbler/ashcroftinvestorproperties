<?php
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
define('DB_NAME', 'ashcrof6_devel');

/** MySQL database username */
define('DB_USER', 'ashcrof6_Studio!');

/** MySQL database password */
define('DB_PASSWORD', 'Treasure100!');

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
define('AUTH_KEY',         '<`y-.:Ea^>|^&O2Z|N.gSz=]=g}Z.gRDoazoq5RwA.$I^!ysE~s<mW9mW6bpGCXz');
define('SECURE_AUTH_KEY',  '{|?^28nv00=%&NQyq89uHDc/+gny?[+$Y7#(jjEh=7{dASYB%;++-{RmJNwtsBFl');
define('LOGGED_IN_KEY',    '-W#h-dqtxsQy>0oD&K|VFGLig=vs>?k>o(m*)ZE`x12HE.X+XU*>aTy?6Y.0cD|M');
define('NONCE_KEY',        '!MhT,=0.{!)a|mD4G(iE/hvI8*~B;ff^qsRY4NXL|#.8@fll7-+p;,>9,lnNgkj5');
define('AUTH_SALT',        '354+x`I6W,9D5VT@$IHoRjx*BEgbe-2+V9spHCg9*j3;iMfxR56D/Ba4LlI#p/O|');
define('SECURE_AUTH_SALT', 'C5-+F$Z2m8Gm<E=6wAfXp>H!~cqApyjY39>Yw,DQewU&xZ`=usUn|{.^nM3fw$Nq');
define('LOGGED_IN_SALT',   '=vNY1F(D6B!wH9-YHD0WUzEKgM+;WPx4C=+}@e>.Tls SSemBk,O];dA{1mJb~g-');
define('NONCE_SALT',       'H0CU=*<d[^[t8HTHN_$s2b+8^I<EMTG7[:NT54el )<pN:hi0gcvvsX}=l?>}Gcr');

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
