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
define( 'AUTH_KEY',         ':5#&*B,C=$gWuR7FC/dw;d=I)D,e<Gp4We-B$,XtsK?7D42`jZ{/ANaw{ii8|`y.' );
define( 'SECURE_AUTH_KEY',  '4S~npS,3(`,{HCeS`0/g<`8~t(P {LZz$4XLg+l6T04eiT*sP*A=)z? Vj9  icV' );
define( 'LOGGED_IN_KEY',    'o3?y1[.[=FZPI^h+c=z?}`I9+[{7z<USEHQeM~__~qNRY45YJ@_p^h)4j#4%btKE' );
define( 'NONCE_KEY',        'bYq1w)yD)VwNcj}&#|n- &/?M>hrb)7A)wn:>D6@^Nl==p1r4K88-#)&zKa mU`@' );
define( 'AUTH_SALT',        'K!!=EfmXNz--wQV@B!HBdzT&7`T7Hi1{AU(@]FgKRr!<OD9A7To6==2775h:yme%' );
define( 'SECURE_AUTH_SALT', '+Z6J^:mU:_=7{VUU W9oUTS_X8eL6f] TqgIvI1EG.ye(PwIkB oX$nCwI>s~cR4' );
define( 'LOGGED_IN_SALT',   'Iex`w3wE<|p!YHSTwueH;*9%*6hIPvBC01GK`0sUcM?s|>JF@}TFV`!N8fW*lVg,' );
define( 'NONCE_SALT',       '>*awM&^`bD76,TD!id)fBaY(Q&*!q7>Teyk~ ))F2=k.V+3$APT,.n=v.94,]xrN' );

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
