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
define( 'DB_NAME', 'db_ti6b_2211500085' );

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
define( 'AUTH_KEY',         'kHdTmy!0]9# tB;Wy9pM[6e.sshrTiW&6`/mYAWZ329UT-I#L9pMibj}/579T]{a' );
define( 'SECURE_AUTH_KEY',  '-o>!>%m}xg9{{cFWP wGTv5/g_AW0-]k[Y#6IcB<V4*uV/<E0vk$IJsg&?T(?@S8' );
define( 'LOGGED_IN_KEY',    'Ilu?16|VliYTN?%X=MdRlbLS2o.ln-LHR2wmqzAuya8Ec>T*dqs6cAaF*StP,Kp(' );
define( 'NONCE_KEY',        '$fWmxqC3q[D?#oEDL:{!],b@ZhwaILw@,O)[9?#a:BJKW(S(64wds9_n{zP51[:i' );
define( 'AUTH_SALT',        'CjI4d$7sa2MRUrMj.e(`A3*D/eku5s+lphiEs:?cWElB!&E^]Z7{-_Jl@g#unZxg' );
define( 'SECURE_AUTH_SALT', '96[;ll9y~#St*X^m{B!z[VKOO([iF8[qr!]?9c5<q4RqTLhK1;4eVFCfPdyFcZf-' );
define( 'LOGGED_IN_SALT',   'L$`r]ba6nR:Y<7+^89b,MDRI}{pSM<EeC?EU++Z:(`Mt+fCF``3RCrk:0aiknk5p' );
define( 'NONCE_SALT',       'mU5r<Wt63=QC4paRI;Ld;dz~<$5Ms6LJ=|?Mvp77z&*@]m7|K2zszw42y.9)fy9(' );

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
$table_prefix = 'ata_';

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
