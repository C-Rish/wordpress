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
define( 'DB_NAME', 'divi-joro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>@-XfWTIW0(<w9jNMGJbz?HDXg:*%*MaVO>!s(,VLSw[p9~Krt**^loTCR7Mbx89' );
define( 'SECURE_AUTH_KEY',  '`,eN-O@/!2d[EOR4aV40Bxmkg$HzSY2k6zMSaq+-(FHH,?Ju|PMdoql)MnD/${M4' );
define( 'LOGGED_IN_KEY',    ';*l?Gq*O*U,,Luf1_%`$IY8Y_CZ_K&a>;49 kWrO^0y`$(t!FWoapHbR2:Xa7 oF' );
define( 'NONCE_KEY',        'j?:NfKfs{DsMmyhGVmhAl/bT{B){2MB(6]zo(S9z-iQncJyuwQAud+5^&>}}^WFL' );
define( 'AUTH_SALT',        '@:9,~U63SbYkkmUaIUcfKdi*p8-qF&bSTpGdgQcf#?}0fi[AGJAgV|c5b_,OfkgQ' );
define( 'SECURE_AUTH_SALT', '9~p>}Dk.On0k~N_bee_q^Up)#m,u:^ypU_>|5@Z4:FdI`C6&XJ_{ISwUg&L|aS~=' );
define( 'LOGGED_IN_SALT',   '7!4n3; i,$8e9 _Z489)]P[/)8_$x9%LSl A%6};=FiNxer4MnD~/;DZEE3*q[x7' );
define( 'NONCE_SALT',       'f)sF;z}%Jjah^6J+}ch>b;5)vUF/$L{F7SlS.7qvmNb1;jG&4[2Ikh(BHJL&d(>h' );

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
