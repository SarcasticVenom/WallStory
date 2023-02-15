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
define( 'DB_NAME', 'Paintstory' );

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
define( 'AUTH_KEY',         '-4C:rB9AGTA)jToqGYq1Tr!Au>e~(C]y;S|b3vM!} rgQ}T!m8EZ<r1*7BbW#Eb)' );
define( 'SECURE_AUTH_KEY',  'mFUM@fc70z=SRy,u>l7gE=<#DFI.W%k7PP>K;)Omp_7`7}4xyVKPEsPV:YoSL.G<' );
define( 'LOGGED_IN_KEY',    '+%:x-b+WwWy,k%ep}rE&0NRQ9vUE0jO7DEgc<^hFUn{={jX/Pt#|DE1#35nCk3S[' );
define( 'NONCE_KEY',        'yiQ$=zA3%2Np1;fx+;o-A[0E/M>5$X&#ta:3/zrU@^~ATOfrbi%Uz||?;{%V6B].' );
define( 'AUTH_SALT',        'p)RFCx+$5%?FHP7qrjqEs=342BnPqzvvZytDwJ VfWf/bmJX!ZNq[]IX]4L>9*(o' );
define( 'SECURE_AUTH_SALT', '0*z=/8A!3Zdf1mhBlJmaWs(ZghTDJfLs4)zYna1M)2:ZVB0|dcn;q6a(ct6?|;!3' );
define( 'LOGGED_IN_SALT',   ':(T/qPp|TBwpX&n8ip0I[!vw6L,RpoUsES%9DvQTBUrnH-0IQ3TK.8OtP4/q@9;;' );
define( 'NONCE_SALT',       '9IUTa,t=~h;JhBIq.*:Yk$|Zy.D^&3u?Fp4zZiV7#3DZ.(68S>dFE|Qr5Q]-L o:' );

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
