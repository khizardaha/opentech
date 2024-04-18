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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'opentech_db' );

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
define( 'AUTH_KEY',         'SB3Jwg4jrDT}$*U)]tmz+QChZ78,rP~0i(^MRqNU^BKA$>MQ4]a@%JdGo:VNdiO ' );
define( 'SECURE_AUTH_KEY',  '_tlQz2z#w]*luN>|]+%r/XQU=28gl!b_XsA(UF@iI0[Ga|U=aorg_kwL/ChPhT+#' );
define( 'LOGGED_IN_KEY',    'n],+jzQRfH4 ![zZi/4u(emb+Cp#mfhs6=M[R.RE!_v9~HlzVPr,YREO>NeJeN!o' );
define( 'NONCE_KEY',        '{x#.7>,qOD*+VecrDpG2l<(g]]kI `):Dsy7Q|(9,4!J9#NmqHB9Nj/:z}wtkjd(' );
define( 'AUTH_SALT',        'm .4c_CV/y)}fMxz!39^wv`3#^qh1J?yTF@e,c|yj:F:eH8_ttU#|da>^Es>=cL0' );
define( 'SECURE_AUTH_SALT', '1!E(B^n6HiwVG^{fLpJ!hih4Tcw;d&-tp*ptl%M<I^]w(&o4Tf+(^7{&`]A6k4LQ' );
define( 'LOGGED_IN_SALT',   's&Qpb-t^Y{ee6B5O/v Qb,;<J=InwF2*h4Za_8Mc1AiIvEA$b|PHw0z2mE)_c,= ' );
define( 'NONCE_SALT',       '?@o$^el}D 5aC4<j{/}zM+b6ThHKiuKB8Hn|m*,q/dY8YbR@)j!vu1&l0S^Ce8r$' );

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
