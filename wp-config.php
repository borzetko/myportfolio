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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#2);=6-M}H={BxJ?X$*VX3,lW_AmRtGn!kfUvV qrRcC*Llh~;O(;N-xfzV2x;~{');
define('SECURE_AUTH_KEY',  'TTHiZW,!#o4m:5F<FmTE4r!;.#/6MgJIpG! JUig{KPn/w~-1L@9J[`OoDS]vry3');
define('LOGGED_IN_KEY',    '*4(`D-rv`^9s5w==2T|3XRZDII_Ut)/y->(Mz={siyEteX%=_o!9/Pv#@948DIx(');
define('NONCE_KEY',        '#gu/l8~B~L~%Os.=`qVlMz X2K+b>xuFJnRi2$XF+!/SECFu5B_J}O{-:&8j}Y.4');
define('AUTH_SALT',        'o}F|`I f U,G*S@kM=z+(]thSji:-9 6h7uI/W!`#560mnp ~Gt)^G{:7x %VO1,');
define('SECURE_AUTH_SALT', ':K#8|@,lI$h|$w}C#ZCyk<)XX5&l /hOWTlFe^P1xXdV2yjKB8,8aj8n~ch(%i>L');
define('LOGGED_IN_SALT',   'mrZ4Np6aY]hX|?u*ax{bTBP? X7-+|Ex)|qktzOkS4|7R+[C@G^@Dd_:p+2,A{r}');
define('NONCE_SALT',       '?b7jQ@+ y[dfWCVQVsmfDJ )}V77b/>d6#qFAAK-;)ax1{(/G0Gv@Kqr(#-n&l@0')

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmyportfolio_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
