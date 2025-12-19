<?php
define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'your_database_password_here' );

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
define( 'AUTH_KEY',         '6mqA5_/oej IKSMlg/|)c?=@`&62*1X%y*}w;AX`DMCu4,q_%8xLJv2`pj.BXGzC' );
define( 'SECURE_AUTH_KEY',  '$F1l|_^h,<FX]pTozg|;ARdzZM(I/^}D6$D%o7Vfc}XNZu&0}9S-QX*5z.*<Ew|x' );
define( 'LOGGED_IN_KEY',    'JV}Z.kXQcdMyoBgTZgUj0.0Ycc[>!h8!cXqRsDHEVPb=I&C2r;V9<q5Z^O nppqP' );
define( 'NONCE_KEY',        '.?MByBNH9o{R&<OlX>q.Fz5s|;P=_zs4c{p9BRPQP9w`;pZW&RYFo-?^&KO5}z8:' );
define( 'AUTH_SALT',        'V@&IAA82L})[,CdtX[7)5URa$7tZ:c5fnU@7,7Rtc61P]L=3B5+@(|MRS9X7nU]R' );
define( 'SECURE_AUTH_SALT', 'A8YND9;R`JGAh<i-[MmT@s_045zBJyxJC^k_?]k981Nd6H&)7xjM62i8H/D8SF>v' );
define( 'LOGGED_IN_SALT',   'W`$3~j?~1Ir!e7>Bjgu5kI;Ne?_NXa+|ZJ/Mg8+,4n@B r@hG#M$d;YeO$!ov=~O' );
define( 'NONCE_SALT',       'uy|VSb[d??iPBjZD*F8_7ums{=!89=Vi1yk+VR*#U @{X&d=0ng!BGQ77Nwp?!{G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



// --- FIX LỖI NGROK / REVERSE PROXY ---
if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
}

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']);
// -------------------------------------/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
