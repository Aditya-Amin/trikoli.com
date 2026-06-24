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
define( 'DB_NAME', 'trikoli_db' );

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
define( 'AUTH_KEY',         '8o@~Q0U@Q8zPJf:,}Ot:G``>t/u@.!e99+^aO{bV]8o!fK.-|8e!z+b?lwRp8!cC' );
define( 'SECURE_AUTH_KEY',  'J9,i|ik7m).A:~&*G`(Tr15G`w7.8F isfGa/BC|)GJ/EcNx[:J`THzWQ[={fLm2' );
define( 'LOGGED_IN_KEY',    '/_2tA+~P&mbP?OWW^?7~vl)iYm:s=Z771YocU};0qTm&KE{O)#u%|~Rz7C4x?.mp' );
define( 'NONCE_KEY',        '(%*Ji{eW]|ncSAE>&p4A{6nJwH?n!Mckhw)EnN$Pnx|wc$pQun@t:trk,mhHjgBZ' );
define( 'AUTH_SALT',        ';;|E&0:!F;P9Hzcw#`S<H[I|d5^.fMMI2bp]sr#NZ]U!%9#HZoPNFh:pN>N>R`kI' );
define( 'SECURE_AUTH_SALT', '?F4m=NA;!d&!RQY/4^**>y+V!%9#OOLrdnIq<N4$$WcfopX1:a%hZYX4#sj_CK*,' );
define( 'LOGGED_IN_SALT',   '&>YnzH%*{)Hs_!1fIcWg;m:#[;<-4jOXD^[&=%brn+Exi);Z0YxA?^p)9V^ tZn9' );
define( 'NONCE_SALT',       'B2K UN(i`p3 ?aDk>.MZ%L.QjJ-duuZZD<7z%NEx6[xn<6H{$z6$>-%@9si?BiPb' );

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
