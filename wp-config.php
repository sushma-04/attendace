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
define( 'DB_NAME', 'attendance' );

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
define( 'AUTH_KEY',         'KrD@o-^:Sw_pN5a]4bZh{dSq(Z@. EYU+OR?&Ot8+Vh1Qr_4<+Ou, 8%1Gd;+.P|' );
define( 'SECURE_AUTH_KEY',  '%bW(.M%C;NBin4VkWVRdD%}{yn9Lc24(+%1-[sMCYLjA_LU`N[A(OMXoZ7kZjVNA' );
define( 'LOGGED_IN_KEY',    'm|RT+$I9zo![:V7k:ozd{`mbh![.5VhG3yByRY,.WqV(*M)Z7=zgK;/`0OomJ5?5' );
define( 'NONCE_KEY',        'HoSUQNBlcgbm0~RqbEg =a(08M1/Hc;Sn~%saBEo1XC^;}.R*[UlUaM(~2.u^$}*' );
define( 'AUTH_SALT',        '*q4`OG?-GW5`:k-r,&F^j^`bljS3~>c7w=keK_HWsO7$A{#?*h7@)bbOhW*F|CTt' );
define( 'SECURE_AUTH_SALT', 'eo^dv}khxCYmuCjxt@EvERih%cM18U(nB I:ue?Q/t9Kj3C<.:?Srskbam0a@401' );
define( 'LOGGED_IN_SALT',   'Fo.7F?^6Saj3<-I+5mBI v}Dmab 4sb+25wGdV5qTi$bc:4P3`:xO.!`[3Zq`ro2' );
define( 'NONCE_SALT',       'IeYC:CF?7ggOj[~m&t`PJTwAaR>~DLZ+jU/G`M,amp6Pt`skqzb$g}P+slTc;}[V' );

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
