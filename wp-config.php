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
define( 'DB_NAME', 'hepalawe' );

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
define( 'AUTH_KEY',         'oxHZN2|p)zk7~#.t7kP56$U*m;pV#.o*S},lHtUP`30D0<  L>w IU:)u8nz2e^k' );
define( 'SECURE_AUTH_KEY',  'WXA*dLhjm9R1.D$ue!`wv,j_{mV$^boj3D.o%D !_!V*ABi(7Vy6TaNh#7HW.vi+' );
define( 'LOGGED_IN_KEY',    'h$Ou~vmSD]>pYT6E@IHJ#1odz[AnYOv#W:h@{D+}}e}^`P`/f{i66Ga7Xv|Hwf[K' );
define( 'NONCE_KEY',        'k?85%5OuRK3lGk5s&f+>5TKfQdD#XOG5SxlZgh_o/i`;88rVcg P1az?b:jmn44U' );
define( 'AUTH_SALT',        '%w)Gn>(Yg1f+c7BpTn-JQGM7K{ge0p>+MMC v`9QRkq``WzQ[tsaCA/jZuQ,|4?i' );
define( 'SECURE_AUTH_SALT', 'rwY#7s2aJ;D}b`db(Be=9tBUX>6)nBCCl>9YdcyPy2Wr6``PH9tP0L^pZAARt&)7' );
define( 'LOGGED_IN_SALT',   'Wc??{] m.ANLSW<q}S-%LmM]@:2N/f:?rmp}F3-x3DW!W~~mYSY=+=qV,hJ>9[fD' );
define( 'NONCE_SALT',       ')Z[Lmo+NYUz|*^qh9m8*H{uT?3xYhy[MJc&H]uZ7gVHOMXj3XrG]<(z19 ,nx9W8' );

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
