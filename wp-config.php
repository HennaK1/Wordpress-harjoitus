<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'hennaeko' );

/** MySQL database username */
define( 'DB_USER', 'hennaeko' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Papu' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.metropolia.fi' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O!SA@e(@o(0RihayP14b`WnvV5J<<t 901VdP?ewKLa9@-tbmj`3dyKhc{s,OjHH' );
define( 'SECURE_AUTH_KEY',  'X{#gqd?d.Ix-E)}?x}G?=l~@3)Vs)&FE,%t.rW(H^}H5AANY#(3PtG55T,ww!hd>' );
define( 'LOGGED_IN_KEY',    ' 9ddM;wr,a.OE|%PZGH4/w5u+s15F  f^#z@or(!*{J{~n)#gTy=tQC9+0yxfaKP' );
define( 'NONCE_KEY',        'DU3gi{eSiQj~z:g5[4FN(5mmec.*Pt-]I<f%B~|<.+$Aw}B)D_ZAPHb`o:%|UX@c' );
define( 'AUTH_SALT',        '-zBbk#&K2LG_ba 3&k-q$[IJY)3~LM]m|U91uMyT=%K^+G|H#5fDP@`7#v.tA:@]' );
define( 'SECURE_AUTH_SALT', 'At0ZJ(rO[S,TjxYq-?-Vshp|;?WCY+#N[jsA@~(a3KkN 3YEC<FLRVSRj;KD(ms$' );
define( 'LOGGED_IN_SALT',   'O&nNw3F4_oK0$2Qc,<mgs7To<3{>2QA%^a2a`2J8{h,Gb,j({IHUYktDwE0jJd-A' );
define( 'NONCE_SALT',       'Z|dsLFJ/N,#b{>^^IR8&SX0`KQ$fE<Kli,+5r&1)XhBQ.<s2zC&qWeQ<TWklV-8u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hk_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
