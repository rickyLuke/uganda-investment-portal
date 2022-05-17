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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'CGt2TkK__H~N*ibj 2>yV7#_?=2c&rdwH~{B6VyjY=5sjv&}^T392ywhT0pJu!-O' );
define( 'SECURE_AUTH_KEY',  'bETFj2zEm4~iS| EyA35=Bo2Y%=eWA-cAaVGHZ{I#U;=tNII8pW[}=J!t^i&}ZA*' );
define( 'LOGGED_IN_KEY',    '5KdXoI r+`[]_m=DTKvc~7P3fJN=j}Tbg_bu_)?@-TX],DtRT|a#ndB.,qy}=Kyn' );
define( 'NONCE_KEY',        'jXq5~[iC;,ks*rj7`#otg7J.[^T+6y>Vw}R]`tpg#2RWv!kCl!H@e!yoQHf`8f~!' );
define( 'AUTH_SALT',        'AdC;[Xv}dB)g;^N)5;Oeq)An,j,|IO5DPMoBPW% IHY}hKXZ7*qiADk_Z3Pb(7wL' );
define( 'SECURE_AUTH_SALT', 'Bct{JciK=mK,sef-xTLU|0l:Bg(.7VJ+N3>z81e*Rus|a=GO3QY*? i}_`F;Z!v8' );
define( 'LOGGED_IN_SALT',   'od_269uToiHW)@t_L8n8n<o[tjNmw@B^$Z}M=3IUoAI,/twLWxOAGB!|1Wb1,dex' );
define( 'NONCE_SALT',       'iq_`_QW50h[^I6cs2quNllK=rM.gsALVYa|V-`CNjU+6K/J+:4#~64QA0U4x*Fqu' );

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
