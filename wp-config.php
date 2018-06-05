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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('WP_HOME','http://happydoggie.cloudaccess.host/');
define('WP_SITEURL','http://happydoggie.cloudaccess.host/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jjaaqtqe');

/** MySQL database username */
define('DB_USER', 'jjaaqtqe');

/** MySQL database password */
define('DB_PASSWORD', 'z[2AlCfY7yZ5!7');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hoYa6EjuD+0Yb}=izgM(I)*&Xo(2u:$~bs{#;k$yq73Qg+cFUd/ s~iCi0*i M8h');
define('SECURE_AUTH_KEY',  ';6U_yN:R)-Sz8]vb7SlO1Ycsq@V@kH]/Alhm|r:)uQf%S~1RMZD:`g?qIM!^oAH%');
define('LOGGED_IN_KEY',    'Xm7feu^!T;8r4Y5gw:!y$MYCIlRz$A[= vz(Abm-R6w}7%K^]Dx>VM-:)z.{!&e?');
define('NONCE_KEY',        'Z^yZ~e%Efu,CoPq6.,]xk9-JN*ZNTje[jeReew}Va-;uQU&J#f~1;<BU%BQPOV,B');
define('AUTH_SALT',        '%E](Ngc#}IZAmUpEW|V+ ;Y%6DBDb(_TBxrli96$Hw$&?Y%TxoSm4}^?%Lb;YHiF');
define('SECURE_AUTH_SALT', '/HyxS]JCe:?dYlZY{uN)yL^nl{@75,KSzyv`nnMC=vg}z O8=;vcz;4|8/M0;8BO');
define('LOGGED_IN_SALT',   ' 4IO9mle@gw!{{R]&D*g`l2tJ=%,Kv|Ph-;IgmYRaZ(R,Km>@axL,BBK;JS9<yNc');
define('NONCE_SALT',       '.?LD*vx}x@]_i o&q_RMU-P]nv14?d/J{]=J7Wd#[%|kGaJfMmj:%Yfyyp_fKk~!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 *define('WP_DEBUG', false); removed from below in favor of the following 4 lines
 */

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
 
define( 'FS_METHOD', 'direct' );

define( 'DBI_AWS_ACCESS_KEY_ID', 'AKIAJFY3LOGGKVDMOTEQ' );
define( 'DBI_AWS_SECRET_ACCESS_KEY', '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' );

