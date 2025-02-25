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
define( 'DB_NAME', 'jac' );

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
define( 'AUTH_KEY',         'Xgc ^li=P<9C{3Yo>o1s5S*rUQjXnVeX+kY$&h%uh-9[,#e7uIL=r<}$k]D6shQF' );
define( 'SECURE_AUTH_KEY',  '&>u8`+J60F]Idoo ;TQQN(k_&~bDER<GvO8C`~UtYQXmAFrG_C=nj!2lkIgn++S]' );
define( 'LOGGED_IN_KEY',    '*yO&69}HW|X7!,BFtp5Aj-{C:+7fsg,<#u}^@?e|](wc42B#~J^pnLrFpru3ztMa' );
define( 'NONCE_KEY',        'nfs)oWB*w3#RDfn8F_k_qtz_eU{t?)o}+*?5:$J#n^`i+@F#v.{N.jr5}aKWicbi' );
define( 'AUTH_SALT',        '/s@ajp#QXb%w#q6yxN#F$#zWF nE+|cegUj:geVEbq,Tm6n}{DIW<vacnI)$LUX[' );
define( 'SECURE_AUTH_SALT', 'T?Z#+cPy|m3Dc/,-&vCDr9$1}Ex%16G!8HAKY`zi.z{=d:hcEQ66Z4#6|Y=5HZ7=' );
define( 'LOGGED_IN_SALT',   'XCx1ckdxS.Qk381mRbfR/p;Y!Bh6L/.I;%IAM*2I!(g%DcxabWoeoFln,^iuU1A)' );
define( 'NONCE_SALT',       'N;3-;oMgMsz_?wm,.9%qb#KW 3BiAIR#4 XD$#ggO[C:@*I140AzE4dD0aa|1rRE' );

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
