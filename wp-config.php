<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Project3_seo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'MDt&}oLJL|7#1CMvYJ4efAJ(+Ce!%&?>!hh3pR![,y>(+dH &z#BMzxQu$}}rY9z' );
define( 'SECURE_AUTH_KEY',  'vx_pf#z2NCLvwjLS5R]Gj aniG+<J8|*XaOc@ZWR?jS^Z71|n}2dC).,69 pj3]G' );
define( 'LOGGED_IN_KEY',    '<SU_8)S~l:3pV=6?s3tB+$? VL<F.D/H_.EtYx84RT, Py4w-$sux/e{yp~QPrEa' );
define( 'NONCE_KEY',        '|Vd*b81BvC(kIOR<2M~iQ%rxNgT5h~~5JW[~&(g@%.QU]4U6;|brdB#dGTA:0mu_' );
define( 'AUTH_SALT',        'd|&z:[GU<Wq3cH36==Y.a}NM+:aIEgYEWgnUQ5=o:WHCp&G<7Rf)(8~JsmO)2=&H' );
define( 'SECURE_AUTH_SALT', 'Q2%HhhQ&ZW!8bpYw=6)&KcyWp%j5t)250BUd9>_7A=S5u)m1vrR_zg6+.&_&[P)<' );
define( 'LOGGED_IN_SALT',   ')jo}fVP!e@?=@*+3^lA,ai:E4-|gZ[fW1+E)ZWm7BVU!f~P3qO%or0QW7j=GWnCK' );
define( 'NONCE_SALT',       'v0T=Sh{[xa0U0GI9iyb^q~DcC9@#nEr#2a!/MQbn`2mIov@TE|dIJb~/R4X$m]}S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
