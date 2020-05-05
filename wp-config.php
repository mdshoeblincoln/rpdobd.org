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
define( 'DB_NAME', 'rpdobd_db' );

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
define( 'AUTH_KEY',         '_onp1]s6wh0L`,#xgR7XTl4+RR)f~]W-rAj|M,%4`kd#d,0`lkS^IQ[4Lvp90p3U' );
define( 'SECURE_AUTH_KEY',  '=8*Yu^y072wz5nc/Dh%cieQlnPkR#P4wp!$uZh7F<jYTe:guJsr%]HalIco}W_U1' );
define( 'LOGGED_IN_KEY',    '7K%r*s[<dILoD%-g}b?RuJ>7z-SUi_gzn@nSbs6CdHuziKYx,)I:!2q5@xLjQ~T%' );
define( 'NONCE_KEY',        '4?Pd5Ay%A~OvcC.{7(x0-L]Mt|Ye<MRZM0^Dzi&WP&qyLVF$tm5$G4]Vvc+*6}t9' );
define( 'AUTH_SALT',        'Eh*xu/9i1m%-T%Nhpc;`n Lb]M$LwT;Ew1 gU~_bAJb_)ZjX(s6 |pLLWaCJL:dr' );
define( 'SECURE_AUTH_SALT', 'a{f~Te _idl2t^j3P7BiNwn_Wv;v8_!p aX=x<3N-Y;JPl0fF;pJugIhm-_Lo07|' );
define( 'LOGGED_IN_SALT',   'Ja]bT<gxal~J7/_vF~p:eGFA2*m(2*n6jWaO#9NV6^|Dl8QBXXwcT@]K=A6_}F._' );
define( 'NONCE_SALT',       'Ry-XMV+#[8-KxwTTy7}SdS)@3nQ)M&37v)al.vDvhY/^1s[& -[L[DZ#~wPib6N9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
