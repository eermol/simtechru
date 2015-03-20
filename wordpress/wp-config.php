<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'sim_base');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'sAG*AnddODGFn-)hZqrv{=f&q)DeBjN5/YIi#|+>Du+D+SUe[ N*|.9`&/hRBT]|');
define('SECURE_AUTH_KEY',  'dETn++F)uEbTzHRQ,F?jf$bU98;R_ 8lof{-D_s.$8+Uopj%Q)w(e^@,f_JUor1C');
define('LOGGED_IN_KEY',    'AHo>p?sXLc/XF.0u+^vQn/{Jp~KYM?hiN-O`At/,<[Pn[;!%/YLdNZeW75X4-HMM');
define('NONCE_KEY',        'N``Fjc6!%%N{$qC:hn-%3!tf{PEW<@)S<ZvTL-I22Z*??OM.uNelVM)!Fv4FRW9_');
define('AUTH_SALT',        '-W|IGG&ISyN9&{O~)-=;2hp{|)-J(!tr{v<vDW#_KRS(`6-)R)n&Wbj.O (?zegd');
define('SECURE_AUTH_SALT', '7p%!8^{vlOPW<|-myY[|JD2jc}ZI*TU)jLJl7>n|csW%|!Z|I,D!oe/Eu(9KSQIw');
define('LOGGED_IN_SALT',   ']i2>R@,gi`zIWxfZ#>SxNABvUO@=*e65a3_HR.vEj~6FW=.rloSGGzoLWvKk[>[9');
define('NONCE_SALT',       '//5SFQ:aSn.a@<6t&7?ia5GR?bB3f|BEEA=,tlEwnj6iZ^atBvo7<x1&{oK{giI6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sT959_';

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
