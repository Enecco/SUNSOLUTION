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
define( 'DB_NAME', 'sunsolution' );

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
define( 'AUTH_KEY',         'ux1+,SV@.~O*D?/L3CIi]bpcrp&;!kBL%^!)oZrx |&ravds:?tBwDE3Rh):V@oj' );
define( 'SECURE_AUTH_KEY',  'P>2lF$]d,chQ|_;Txug;^/pkCgdE][P70s9rk7%dI_wMn:]mS3c>LzRAIOGu|Rxs' );
define( 'LOGGED_IN_KEY',    'u=Xxt3z.CKI7U7YQE[5F2&y`;+@Ib9!s/NbD lt6nK`tHuul+`A%)PR&by lX.Pg' );
define( 'NONCE_KEY',        'tX>KBk83>x/awFiPf;{qiMKQrIpk%>.7^uV_K4;F_[Bi{Ud;>Raelzdj+x=l=@_Z' );
define( 'AUTH_SALT',        'U/7<RG1E;6]Hu8urho:&^0$0V=g_?TcyRjH9x2QTaklv.XE<eV]VDP<1_le1aGKd' );
define( 'SECURE_AUTH_SALT', '7qz-Sb#}&G;x2Z}krD/[u#~dldPxRs]M:vZDrop}fH@Ma()y(yvG~>-{T5/2~@|U' );
define( 'LOGGED_IN_SALT',   '^nJgE=vZn~^>nPh P$Nz]9`ViL*v`24{J63#$NKuVre-7pfj%9{K)=PW*Z3Wwv(Q' );
define( 'NONCE_SALT',       'XpK^.j>cVFON:%R?nI=;LLrHrWXGc.J?%.6^!}x{b@Sa]7?Sjf=LOuy/ 5?kh(Fd' );

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
