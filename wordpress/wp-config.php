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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '.}k;3 u}ev%vJQl<imt2%F~$bR?%+xn#GQh`p!Q`/%S9p_M5r_?nOV^71547C{d^' );
define( 'SECURE_AUTH_KEY',   'Vvfvyr*k`gW<[9C]bJO[x<aMa?[OPA(sRO:)T*GJ:1Llae$d)0K5nx`j8$zBCGo1' );
define( 'LOGGED_IN_KEY',     '>l#AIMA~=|GxD8OIO~gB)wzIm6P6$rVa>_5mD-k4<2=?W{jK: dJ>=M.Q_BJzrws' );
define( 'NONCE_KEY',         '%8~-N%o[x.:5{cYA|M$<(thG`Q[~h!C#.lWsKntg%L}mS`Hif@[Nna:%vGdjE}zT' );
define( 'AUTH_SALT',         '~JUuED{iv!f~tIHDANT:q3cSS,i+EYrDY}tipmP>v)8=KM.;pNvf7H<tF#;TN*..' );
define( 'SECURE_AUTH_SALT',  '@~7I<}sNl#4>,n&og)#XOEd^Gee7chH2e:dmcv!`U8:6d0,]St;e9Im:*cyObE_i' );
define( 'LOGGED_IN_SALT',    'd{P`AoFPD8_ynQBk]b^7wH&0b!tw#eo+!@kF*%R1H*pQsEL8Ub[&$jwVun_$2U[ ' );
define( 'NONCE_SALT',        'yNwGg8j`2,7j#cgveX)H:^V-A&m?-Qaj:cy6?ca2=qv#Bq+ik0?@__^PA!1QjIcn' );
define( 'WP_CACHE_KEY_SALT', 'GszNbcv22:ZLYR*wU v:2F luezi{c,,(2^><j,BrG;kQVY9O`^aG@ii4W`G5#.N' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
