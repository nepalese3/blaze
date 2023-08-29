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
define( 'DB_NAME', 'blaze' );

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
define( 'AUTH_KEY',         ' <0R~vSF/J[sU5F.675)%_6XE9N{*H;%<F|B/rm2WR;bHkGr{4dMERivO}T,+#+|' );
define( 'SECURE_AUTH_KEY',  'bofw1p`o-+on!rVegmQCOVKcS(i4/EJ7a`8eY0ZLMHbTolRStH$J`iOy3fWU9Hk@' );
define( 'LOGGED_IN_KEY',    'g8WBpVH7pPgIBAJI}fD{4WvBI<gD@ 3-,X~VaBG*gwcnTpyAYzigk70vL$N)2C7i' );
define( 'NONCE_KEY',        'zXH?ZJUro1}s&;4&nS0u,`&M{t#].8X4~fRT5@[aFVT*#m!4m?AEIZnI/zD4<Dsa' );
define( 'AUTH_SALT',        'NPmXO.-MPv=pdlm$Dddhw*M vfgy[70Y5(AjE;P=X@:Jb!8hxN14m_P5qqxMpiK3' );
define( 'SECURE_AUTH_SALT', 'c0W?<P2k0| /1 )_D_9+t-@cQlyZQM.g,|M8zK@Yi{*1__/)y-_h-)WT=s&t?N,H' );
define( 'LOGGED_IN_SALT',   '(Bd KaL?/Zri<ze?D#2xmX-V%MC98)IAii:i80R!1C6@* 1h-,s_?l]Gu]oC CL/' );
define( 'NONCE_SALT',       'y5C_GHV0Qfl(6EXUwXV}ISGS E{hgKFm|@UVil|C>z+V7xNH4rXkG#)&w~c9S`Ne' );

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

@ini_set( 'upload_max_filesize' , '400M' );
@ini_set( 'post_max_size', '400M');
@ini_set( 'memory_limit', '400 M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );