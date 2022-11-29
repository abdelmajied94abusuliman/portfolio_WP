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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'vohJ|pC_VVbQj247a< #k3V%|uOb4wH+e+6&V[A8Y3>t:bEr9feedu#Vr)=H|Up-' );
define( 'SECURE_AUTH_KEY',  '8JGb{.=6Y82F-*1EU>Tw@D3W{e/:w+:Y1~l737~Zks(iWap[%RPKnV?Oud)R1Q m' );
define( 'LOGGED_IN_KEY',    'tg]mp,+.CBG>_N)P!Sa(fV3V7~LugVsL-Bk<ix@Ct}v<7it.?)J(?+h}BIub}0q ' );
define( 'NONCE_KEY',        'b@DKlhcX}/)L}b/<i_hG20x>Ayh<OpR)|0#{V#VeT`l@2!`5g#x7+es7hNXoHCZ3' );
define( 'AUTH_SALT',        'C-a.,FyUPxwNy)lHxa73Lc2x*G;gO|dF+|E`z(*LOM_BT+H8G17!kI+0r r2(UZl' );
define( 'SECURE_AUTH_SALT', '{8Hc;4?F^ebMIc58_oQNFN/kYECb6twYs7pw(%^8NvgIX-5Iq0.nVxSzQKOk9~{?' );
define( 'LOGGED_IN_SALT',   '$h@`R9zQbJWM~;6[@,ZPj#-o ;Y9o5z=9]V{SVeT,r:T7CJc6#T>wv!REnq^w:Ic' );
define( 'NONCE_SALT',       'S*$G!%:EON>Op[d,CtHzvk)?-P<nAeKT;3;zu4r$N_ 8 A_Nf)[L`N#<CZ:;gpV8' );

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
