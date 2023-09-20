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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressv631' );

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
define( 'AUTH_KEY',         'X#21A~[ ;{6,(@eN[0c#uMGM[k{pDH)_~/C^+AFov;@b[&1tZP_*;6I`Q1)ye.<Z' );
define( 'SECURE_AUTH_KEY',  '@J`aYa~gaN{xU[@V:oEh$ayEjOg|JfOugT $oaK &v;;b*0_u$6u7 EOsE8XbCQE' );
define( 'LOGGED_IN_KEY',    'n4:qT00yhE~cnJ|Abq4imEF,xFb;ma[;S@e/sV,Pcu|3<NCmGU{&QYpD8]C}ouPp' );
define( 'NONCE_KEY',        'kff6J*;(-F]Jc+U[`v9r4F}IePs!_(1HdcU}W^ert1*A@u%CTXpP4tS58{L>[<mm' );
define( 'AUTH_SALT',        '49}#Gp%l?cKYsdXO+8u(OLo=rz$a4HW:c-H). rvX%U::ny-+ K_ktk]L?s8Olhk' );
define( 'SECURE_AUTH_SALT', 'OhnRy>i/&RVVM](x~uoh?i2qczaY C? lAq@k~7ohn:$j}5y+JPmf}}O|%d<(-t ' );
define( 'LOGGED_IN_SALT',   'DdCbP/^kTu(fKmE!0!fh3W*fQ]O{C#H$`/(PYkl;2R!e3lU/ $iRB+d-A_8s{dD^' );
define( 'NONCE_SALT',       'hs36D{J51J/<;~b`rk!d@PokmMJ=j0V?{FY+0y?rxa1-)/flw!rM?x`x%ue*a,ha' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
