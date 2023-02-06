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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'VT(S?qA{=&tGZ4(WL^#|?o[wzUSgL=GDWz;QU#xP+]OA-IL5PNS.caBz &O4i?;.' );
define( 'SECURE_AUTH_KEY',  ' ,IS&h@(M<3$W{?Q]iU(H;y7W^-kmC:?.v1*m}PkUfL#!a.n($Y;:;z(AsJdT@D*' );
define( 'LOGGED_IN_KEY',    'l(@.(sX6ML<G(}o,PI8=bzy5%Vr::ZYK?7;BP9EsZI.A.Tk_R*y.|6;[Egg>0*IU' );
define( 'NONCE_KEY',        'Lh78fTHwYToR^u,iL<@s->4Pyi&/o@*k-rkosKHyMe^QW`o(} 2dPJpgd;:N2F6`' );
define( 'AUTH_SALT',        'c}3>3v~,LsMX>{1^_:9HL/QrM~oPH71a;y(hhAMf2`q$`>G8*d&e+4c;A: .W:+*' );
define( 'SECURE_AUTH_SALT', '<%k<PK3N~_HQQ3E6LEpJy+))kiv_IfR!k]@vj|9<&MzM,(e[#Fa@@Lq~)m~|ajBC' );
define( 'LOGGED_IN_SALT',   '|~&%sT/M[w/ -+7?4iXNFto5b2a#4G2atd}DyU.k@:DQYkUj9cd~H$9l:=gR8hJ3' );
define( 'NONCE_SALT',       'Ly#4q,mwwxH{z&IkXh+=YU^4jpP2u5=cglCt2}X %`9vqxA)#|Zk|%!34uH|;^eJ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
