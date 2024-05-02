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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'ZWQ,N)[Oa@L8BR?)8ivTbbDWigz2R:a1%&kA8O:P*m+P+ywNY>2~O$#D2slzeypI' );
define( 'SECURE_AUTH_KEY',  '-W2]|q^c7*Z+R~_v2^}&L@#H<+_Jhf%3B/aIPlFCz+|(b?]B`&rsY5Sy9v~/zmyL' );
define( 'LOGGED_IN_KEY',    '|#1wc|(B3T0VYV&+`6bqnJLzh&6,}N#7C=2/8`Kn94V-2_t]jpBNaOx-N=EpUVI@' );
define( 'NONCE_KEY',        '^+Q^8Fa?dt*E.iL_^5if)$ejI<my!}$X~rMUF-#|8/0*gh %($y?CSQ+%MU%vHcW' );
define( 'AUTH_SALT',        '9`ZOYY&I$s0} 88DO]lP1XbUewG8KARRht+e0ffzSY-~ hd#8>fHzAbZ-MZ},VS6' );
define( 'SECURE_AUTH_SALT', 'Kk|Tt2SO),(pH2I_l8Yn+-Y??5C=pMQ6LkOfM;GTz]c<k@>[M oK7ZM`ld77D6U%' );
define( 'LOGGED_IN_SALT',   'zaTq0Ubt,:8gzKr@b]o>l=+xxEQ9[v0_SHgh`-#o]Bbm~!Cr+_BR_?w+:Ky[/ABr' );
define( 'NONCE_SALT',       '2mw_gBe{Kx9Wiju %5bh{[vB<)rAx|J-#r-Vs<C~PyD;O!W})3EDGE|OGCG,xzTc' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
