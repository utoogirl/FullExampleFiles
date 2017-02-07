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
define('DB_NAME', 'exampleDBdq4fo');

/** MySQL database username */
define('DB_USER', 'exampleDBdq4fo');

/** MySQL database password */
define('DB_PASSWORD', 'd5Um7GarJ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'go!NcYn0F7Jv^0n$IUMY,3FEQ${^Xnmy<PfXjAMLX.2<6fu**;Xmeq6HHWi;92D');
define('SECURE_AUTH_KEY',  'Jc0J{br7IYTj{A3EQ$<<6fujy.Pfbq2H6IX*;;Amxq*]Xiit9LDPe#65Ht~x_2app');
define('LOGGED_IN_KEY',    '[gk@RVoC8R|>Bvr|YcvJFY>Fzv}cQ$<7{Bnyy.PfqjuAIiAAmy<<2eqiyAPbam');
define('NONCE_KEY',        'dl~KWVh:COGS~[[5hs!-|Sddo4GVKZ!1}CNz|@:Vkgv!NYRc>84FU@},0conz>UgY');
define('AUTH_SALT',        'mPWtD9T#]+_Oepp-GSKW_1D~[VlZp1GSNd|4[8kw|!0Zods8KZVk}C0GR@[>8gvkz');
define('SECURE_AUTH_SALT', 'WxDSWOi;DDGt#~_1hxOh:DGGZ|[_5hl--:ZdVo48ORg!0:CGs||4VogvzFZYc>B48');
define('LOGGED_IN_SALT',   '[o!VZ:8J1o|RgkcwCFFY,480Jv|z>UngkzFY37y>UjAQUMb{BEu.$^fuiyEXPTj');
define('NONCE_SALT',       't_D5Kl--:Zdsl~KOOh:CG8S~_!1gw-s!Rhgk0JCGV|448k@vz[Vonr7NJYc>8BFr^');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
