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
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ox%kBEa-{10y_U`QA`%zB-yw4#v(S)mXvKhx^[BgH^C2;,ZsPu7rNemq5rd6%}-2' );
define( 'SECURE_AUTH_KEY',  'QY]8U33y^06h3C>!Dv&|6R7hj(:e~)E-lxzVTQkWYTat$HO:(f^Tb:JOX@&#=<J|' );
define( 'LOGGED_IN_KEY',    '=aK*VL838)V/1 K;L?oJ%^;:;g}<^;+%qf}nHetk|;.L,.gF^MKwPT)Rlwgz^ROt' );
define( 'NONCE_KEY',        'mvi.^d0c>;<XtpOkm.AEtF-Z`g<8^RG$!Ewq$yQ2kxYp`$QBx7:h`6{!G*~(L,g<' );
define( 'AUTH_SALT',        'KV-)@%VUpzB}(h_L[|~lsV$&)g&7+s50<F: )1PRMr xYc*YjOJONj>~Ucc|=RFr' );
define( 'SECURE_AUTH_SALT', 'M1dRj,KU({ =:Irk/bXWShl)h;N#{awKxYlXx{UB?!if.%{!.}t_cGab*f}Rp:wg' );
define( 'LOGGED_IN_SALT',   '0XJ9ur wJsO4:kF-/Z`+Lp^b[tN@ntdP|5NKT #@B/@FzJ. 9-})ci(W.eibl^%W' );
define( 'NONCE_SALT',       'dx9TFv4qwMxW.u~zn`~@22^,ulM(zkJI:>_+74V?Eu%jW9BR=CD=MS)T=Y693;M{' );

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
