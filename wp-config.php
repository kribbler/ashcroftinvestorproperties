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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':Ht_p?RzOPp5]kO$WA1ACJ*AJFC]&(/Rl_a,}=o3Ky%v:|~WH8[H1XIp{uTEVtd?');
define('SECURE_AUTH_KEY',  'XF5l)6w`t,wOTs+PR;;=r{8,P+xnTp:RvZU:5K{FllHe)n6|!%yNG;f*NchjcowF');
define('LOGGED_IN_KEY',    '#@N?qr]HH7?xB5d-))e+Il3S]eYvuYsI9M%1;OAD.2J&j5RM;joFj<[5s]*AHh-g');
define('NONCE_KEY',        '|X~on-7zPTlgM7*RWj@3;!Xp,vco5j1 ^QV;seee;zp-w+v/.P5n9Rg50bKZrl^8');
define('AUTH_SALT',        'kBCLe|nM*S8*L9/R[<`*3Sqa|bpo5L_o01B*=Mk;hq++Y}6>@FZFn# dlW-F-G.T');
define('SECURE_AUTH_SALT', 'Fl^P&|!ARL:Iu|O[jl;v*${%/ef@*NDE=;?mE8{op(Cr5sdDBu1Ou0#K?F}lEX8B');
define('LOGGED_IN_SALT',   'E9I;nNz #&ZHa]~D^^S;5Sy@TSQIV76TwbyomW:Bez(4im9-*W.^U*azo2V:^g8T');
define('NONCE_SALT',       'uh!yyu3W*V !iHx-P[E/0:D:P{czjg_-0CvHC#Q]:s6J-X!zV6[~ffN%}M] Rq7i');

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
