<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'praia_banco' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?6nS<G8d725GJk5nR8[[5O}_8IG~QGVI22;*h9~^@Bp}Y5(0Revu4Tb,*OPO~^Fw' );
define( 'SECURE_AUTH_KEY',  'wsN&BrsUuzK~{2c!%44aa0l$57i`J$VFWL``0bK`I8^9J>Q$_C{]dJ9NI4X(s#VI' );
define( 'LOGGED_IN_KEY',    '}M8 IlzF,R&*3D#hobJ&vJ/(6Nvgn2L]XX]gBs-mYV,ZYIF^!dG,{e`QVVUm~8o@' );
define( 'NONCE_KEY',        '%$4=fetm[OZ$iIp]&6|3x,Nyn;l70v288>R.Ec0WgKm]0HOu#NXm.PD>K)o7Glh]' );
define( 'AUTH_SALT',        'u*m-B2OSuM mjIWoJV3pX8bRIINY>_V>Vr?!^KkIHH^),O&du5CVHJcEZ>5X-6FD' );
define( 'SECURE_AUTH_SALT', 'mtO9VY>TW+ &Svjdt}$e|JXQ}P]@PFC(+.:@z^cKnrIX;/I kck}(3O-UHR|av70' );
define( 'LOGGED_IN_SALT',   '=Z9p|&mtF~h*c>I7t<-jP_=|!N4<;<] /QR&XI2>cV3S75g^%C)L|/GE}|+3V-?~' );
define( 'NONCE_SALT',       'lrg*=}aY/)GrvJ%$$K.XCn9L^a4XV_@{6X>1;[W/^)belX!N5k5sN:D8Q)Ak/dLA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcrm_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
