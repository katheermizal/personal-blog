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
define( 'DB_NAME', 'personal-blog' );

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
define( 'AUTH_KEY',         '?<mLoa^V7{61:#~jGW!I$}rA 6f:mwgTXvjS6hgqB^^^iR4T1_nf%7!u|X]u)+WF' );
define( 'SECURE_AUTH_KEY',  'y6 QOZMJ`@u@jB[`GbPw#%lLjea?NZ1LiyJy*u9;]Wja.@B:29ARY,:(^MZoY*7Q' );
define( 'LOGGED_IN_KEY',    '?}L^Svuhm20{u7]_?4Gzw&dt-OkS e!#kMh^c9i8idn06+Oj&u}lA^|InO{a~]ls' );
define( 'NONCE_KEY',        '7DrY]Q*$E8xj^KtJ]]&mJAXtkJmQ%sXJ?VU|^Z4.{Nl(UW]o$e(^c ?`o3CagD<7' );
define( 'AUTH_SALT',        'ib1NL,pA1X?&tA?:!.nYJ%mmRcwsHHm[FX~Mv[F$!!V=(QN?X$Wi!13>7if6Gov9' );
define( 'SECURE_AUTH_SALT', 'N[EY5##w;QLY.dl<9@J`J(aFe78*jMq}Xor5;4m[,y-Z)IGt?buE?tep.wxMV.` ' );
define( 'LOGGED_IN_SALT',   '#8?q(V/PZZAD1BN,I{`z/~SP9Q~}`6.x#)boNk`%jCv=<Sfk!%-Q}t?T^aBGDrZM' );
define( 'NONCE_SALT',       '.TCSq2h%zb&IQ7dOlu1vi5es0_~Mz2g|[~4>K.*T|P!ZJ(cVjSp*Q&oeq8T_>fp>' );

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
