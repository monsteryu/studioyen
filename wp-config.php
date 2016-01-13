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
define('DB_NAME', 'studioyen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=5 >_V@ 3-,ft)}_o7K1q^R_-L3jJ_C)92 HH!nTv|Ra;CeT[~T*C9VCFyy(ii#T');
define('SECURE_AUTH_KEY',  'sL`]4KEIM_goS<+-BLK?k;[{A_=gp7:*:X4P2qpC:dJ0!TF,]yf4&+4[Q>qcsW@j');
define('LOGGED_IN_KEY',    'x&=Jtar%KxRz[|ltGmfxVT-=UVmlEv0PF<fM0j|BN4|1JG`%b[b.a-v69yUB?w^P');
define('NONCE_KEY',        'EwL2*3;#r!=+uLoklE(+k72So>[-I^%NtcZ6PCH8+78]Yk-LGP9rt m]YGT_5)c7');
define('AUTH_SALT',        'F<aO+(:1Bp{D2~}.I&bU|DHW$vJ3*PrBhI+G0Q5|=2a+H-|(}-a$-ZE[w &k|}p[');
define('SECURE_AUTH_SALT', 'x/{32I9{G/7>[Kp~x,Rd7P}sDr8GRO=w]8AYpn.1IXrK2 K7^u7<eQU&@F`&.?`w');
define('LOGGED_IN_SALT',   'jLfRp5S@2eW@5v}6Pk2hA!O+H$#~.3x-DeSet}}S]<*&[Xu:Hr2gXm$ ,Ot#gM(J');
define('NONCE_SALT',       'p^IhTDa#[FZefE:veEi5c>2]ZgC{9Mp7&?u(jn~ddnHpG9oBt:5!A$5;6#p?j/VY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'goh_';

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
