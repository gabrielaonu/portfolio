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
define( 'DB_NAME', 'portfolio_redesign' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'S~W1q@EPkm^#aQf<l7Juz)nUvxzMc^=IU290Ym1Sfie`h,;7Q5Zrygrm{W7 Mr R' );
define( 'SECURE_AUTH_KEY',  'BxKM%cjiLJQ_[D$$#`:{9bh|5n`T4&(lez*hTC}Z?qy!Fh#!I{qNxy1Jl<4h]0S&' );
define( 'LOGGED_IN_KEY',    'UanbA7QG:e~=]$bVV!6B>kE6SLl)lnL&>^<|:O#`3+xq7a<gg7M8X:h(;sk2`k>@' );
define( 'NONCE_KEY',        'H:N^H[.w0?G5rJURh+$loG]}N+vxd:5pZy<x|pd]O ->V:wSeBXkfagcm@u/=eWf' );
define( 'AUTH_SALT',        'XzOUF*Xqa?Y4H7in:G)zPeE}dNhT<nOEhq>%~dnQ%j<O9rFp:6|OLQD?q[MXb]+7' );
define( 'SECURE_AUTH_SALT', 'Gjf4997z$ $10JY.$SJUY);0)lYa,*/X5?(&[w~7|9+$$6ic246Q{E4(c3CL+xql' );
define( 'LOGGED_IN_SALT',   '`1P*;s,x)DN`?xby0VqQIN27Q(aSBy1HrA$#v[`^.m?JEPpM 3XSPW$3|ZlI/-oB' );
define( 'NONCE_SALT',       'xx%cc65Sy69.`]tnD!#+4SwT/BaS+ig-HKxn$1@!W*|Kd`g|+Q=QE5S>w/^sN=^~' );

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
