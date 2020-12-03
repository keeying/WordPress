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
define( 'DB_NAME', 'mamalaila' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thouSA625088~' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J%+e!5DQ/PU+$S6(9Jo#wXTk[ N6Z0BpN;ATm2[/q4sZd9>{|c0_#34R5X#IctB9' );
define( 'SECURE_AUTH_KEY',  'E Tj[}<Me :QKh+olkzZy3Wc%*a!)}5P6l[J-[|~2h|lx!xz4Qic=4<,,shX|J_*' );
define( 'LOGGED_IN_KEY',    '6b2Ps?KayfGoz(:#c?OhOALL)a=ZKR(yAI#]v3;J5pp=2?I@K}s~pc l?,};q.[#' );
define( 'NONCE_KEY',        'n0.gudG>=Oc0WZ{{vJ]QZI$byKU}eewHjl2C~gi<?ij/F5(@0T5!u^Kk H0Jd?;J' );
define( 'AUTH_SALT',        '/2F,<q8~Bx]cWQP,*#>V(w3g-IN,%WiT;`)tSek+=ND=b|)K*-Q!~G;(,Ksh_GuS' );
define( 'SECURE_AUTH_SALT', 'F(.o0as$_txxM7-;)Lmu8GL};9U77Bzl`!PY$4[Oe`~}Q*LP[,/qowR&&g}:wbGC' );
define( 'LOGGED_IN_SALT',   'mpiU_{s>IrX~XdIW6Tj-4-YoenE5sXaJ_PMeq?cw.W.oaO(Vkh|tlCT]9al^Ul6#' );
define( 'NONCE_SALT',       '/`.3[P&us;D]T]eD/[A[)]uxBhBIT rWl_6^ymBWCmO/|$o!D4jJIUc2L+[)Xd#x' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
