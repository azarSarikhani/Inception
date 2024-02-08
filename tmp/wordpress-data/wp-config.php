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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_inception_db' );

/** Database username */
define( 'DB_USER', 'asarikha' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '9=w_|pbDZS@A83?$B[~MfMik@dm&pM >{`w)nLW.fW1n5Yrk6+%r,`6kdCX/W-2P' );
define( 'SECURE_AUTH_KEY',   'UDY!}`|q+kJ8bddD:aDZ4moAYheZc}m/ ###6TmfFFXeY)tiTpaxUT2p?T4^3LqX' );
define( 'LOGGED_IN_KEY',     'Ppy)<c/y%_E8(,h@R1=(Yz*XCB+8]qXAw1sAZvNZ@F1dz=Sqr_/V|pfiEi`=8;}`' );
define( 'NONCE_KEY',         'ii&8)QW76LVfg]H=GAkqx^IrG#xR=@u8llh%jn`7_0D&(-D!)l*mK=vd*sw0u=*j' );
define( 'AUTH_SALT',         ',$m^6+4GhXTeBDi.~B[xUa7G_-4x9uy(eC4s/zXE-tpDqt)QHAr&~7&X)%alIjr0' );
define( 'SECURE_AUTH_SALT',  'kUqU!ucjx?O]cP5@nXqZ/Zp|Ji_JsKa5E?iksV}RSYT[`(Q%^4kr1Tbpgk@q.9Q1' );
define( 'LOGGED_IN_SALT',    'P4Z=r/z+llpbv8-[+><)yF65#gZyU4d&~4m+Q^ZjRo:.Ua-K2Xt<6&@INt)8AU|/' );
define( 'NONCE_SALT',        '}[cXKz-5LskWq)H%=(UU%6le/=hRhihGgbNYPB#-TsPSy,I/LV5,jeKF^LH$STnL' );
define( 'WP_CACHE_KEY_SALT', 'I`i>slEp2E(q_{9E|T-9^b6lw)s26}k.y wwZ%y[0wUfTu4.:9]A3&Wv&=8F;$ 5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
