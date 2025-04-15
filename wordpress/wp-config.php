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
define( 'DB_NAME', 'seo_project3' );

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
define( 'AUTH_KEY',         'E&.z?Xhc@[RdRVYt{GDh$8:}Pa|Jd+SOsl;Tu1Y3YE6QhQKr+:7XAKC@)i0&&LF<' );
define( 'SECURE_AUTH_KEY',  'dOh^jr?:j>hCMz!8}L6v(7LtN}i,#h+nvaVhLPQ-?^<iYzx_Z?a`qyz?tLuy_m|E' );
define( 'LOGGED_IN_KEY',    'q;Vmw([|?R*~6E(IP]cG/8-qBHRGP$Q3b]G#3jIoh@#@@K$Fi1&8B #r9uOV[rZ@' );
define( 'NONCE_KEY',        ')PyU&JG^%am&FOsg,#=K1&&&gN|`<snWZ:jJU}5sb7-Z8/*@H>GjV>|.=b<S#@H&' );
define( 'AUTH_SALT',        'U7>=t}0q<E| K`9[TW=pX&1nY dHHp4R_G?.D84>3!1_%VcTGW@06|u>`:6MWVM4' );
define( 'SECURE_AUTH_SALT', 'g[aboGa~:!U%n$PnqEw3t}&b&YwGg]HB5WO)_asI1oLdON;nb6@NP;WJ!sedQr^x' );
define( 'LOGGED_IN_SALT',   's*gsJ!D%k^@ZR1w[KJwN%&<z0c2?qg(3 HMOnEv!9r6[c6JizQ6p(PK!boVHXf(Q' );
define( 'NONCE_SALT',       'uO-^u0c=[/MVxN|CB)SvFcFi=O3<w7P6kA(w:0};q4@1*AVTxsGsG%e&xC{]_<L}' );

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
