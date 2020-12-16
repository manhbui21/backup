<?php
define('WP_MEMORY_LIMIT', '2048M');
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
define( 'DB_NAME', 'gigilbra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123@123a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Viq32z_g@Jw^e#{!Wng<:W@bDy?&vW}rd8O*Zv4c/1+oY$>/v.9yRa{0yi*HM*48' );
define( 'SECURE_AUTH_KEY',  'sZpAu!-P]#^5|7iJh@vY7jC+>=^UyI(?cAc9c,+^+KpD;=;ELhSBP W$y-;_Cn|v' );
define( 'LOGGED_IN_KEY',    '.TI~}Ir/MC|P3b66G:0F(Dg_ZC`T?:$HsVhr^cCoY|ca0 Ave(UN.N~({,??@-bo' );
define( 'NONCE_KEY',        '02Ju}*YR50V;1r3 )|0w){kXTY@$@,j?^i&uQrrQaG 9jDuY>P!daO}-<Y@{9d1T' );
define( 'AUTH_SALT',        'Q_tz(0<Z)MP5U^2Y@9u0$qnHZreSUv[@yEAvbmwR7Sl`a|x`?,W98&p{i6=<f<Dl' );
define( 'SECURE_AUTH_SALT', '1ZxL[8gz@F.wQ$V9Od@ITn 1 =Uwzx2f.G(s?359RP(#+n%w}Au,/hvzP)I[hBr;' );
define( 'LOGGED_IN_SALT',   '!A>:YOUr{`{xOstlj _:4nt.`7YL2?j6_Ihl>6C^gYh-4exLL>9[emE|X8a<iBX>' );
define( 'NONCE_SALT',       '5K?jd~F-E9W!L1MJbto7Yx:f_~om_?epAuPd+W+m.8NIJS1hpDq`l.;5!38vUufY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
