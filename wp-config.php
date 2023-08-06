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
define( 'DB_NAME', 'entazis' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'c`%1N#V1S2!#|I,so5u%j=VOU3Ux$ul@igGy[7.?D4G %<1xL~4% UDo8[O!/?Cw' );
define( 'SECURE_AUTH_KEY',  'o}o:g,K~JBMvN:6i3V bj0_z446/pLpk>FoP)HfbP2U[f]q|1stZC)Pd4F+,jnyN' );
define( 'LOGGED_IN_KEY',    '!(>qI)Te=*~<+4h7cy4QQ+C%i5ER:;lCto?y]~@R}=|`PR9N97|{(bn.UH.qUG+S' );
define( 'NONCE_KEY',        ',x/-tSt)!*{`nWMD?:(j;j7R65%e/BEFh6]3D^l/V-RTH%vbjbE`MMw;$aq.J9,C' );
define( 'AUTH_SALT',        'k!H;A%W**OuQUX)qg1u68MoKxX %jB~E0XN/#E[k4;T3k1%_Q=FH&HoDr(<tTWe_' );
define( 'SECURE_AUTH_SALT', 'XJ&9uJ~* Ti9O&g,uPO1}gGu(B+3Wts%GTrb~C:Vj,t#-Dm0`*X0[YYerF]ULIG^' );
define( 'LOGGED_IN_SALT',   '_^?=~9%hzYL=xaP^i x$])U=h*f& YP, 6ypz~l)60:o7UgL#E9iX(>/?oSKs6wb' );
define( 'NONCE_SALT',       'i/ 5&w28S&^oM1P K2JZ2rna1qlAIJ[P{eFHfF^M7ET`V[t]oS{Lv3Y^BSDT2y^N' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
