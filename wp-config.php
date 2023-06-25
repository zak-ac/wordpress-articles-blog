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
define( 'DB_NAME', 'articles_rec_db' );

/** Database username */
define( 'DB_USER', 'zak' );

/** Database password */
define( 'DB_PASSWORD', 'rootpwd@2023.' );

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
define( 'AUTH_KEY',         '%3GK} rTM`PO|[jIwN1k|Z[uoelzpo#:qGJsD1ut>/-=C&m-f;NxVcyf<j@X8@^,' );
define( 'SECURE_AUTH_KEY',  'ey%@&-ty(;j;kgs/)A-.PS>A<>Kd`G-C0?.DWE^k)[PQJyvG%Zd>k!*&GTBHljQI' );
define( 'LOGGED_IN_KEY',    'asS582;Se7o2D-2l8B5YMM;)xZx@RqjAVAfahYPT$[4S?K[%H*(cT?!hG$cDuZ>g' );
define( 'NONCE_KEY',        'g,rov(y:z3Kt3u1fm>tOf@+,PD38O,knYX*  ]mnw}}BbLk6y s>qPRM?nZOmN:g' );
define( 'AUTH_SALT',        './G=D!>6.z+!pz-esbJ8FUlB#VmJtxyTk+gj.Gb-2@4sUh6MgR<f0__(N%r$ wA$' );
define( 'SECURE_AUTH_SALT', ',x0~cEL,~NrgJ%tI*e8qf)-iP^[?ogcqch[N&]/ooe-^.*7dv]([A^O1>#$h[]k;' );
define( 'LOGGED_IN_SALT',   'V.DRBk#@s??g~aZa%zw_S*G9oYV2X2{i:?O`82H1zNM5A0G!WA ;}/ZM6NhOlkPh' );
define( 'NONCE_SALT',       '2lr2Y99N?0[X4?c5R{qJNp|^,:7J{{g_tJ?F^/jEQ6|hut9t2W-y5pqbVi8fci-(' );

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
