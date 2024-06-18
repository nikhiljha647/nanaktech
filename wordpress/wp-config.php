<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nanaktech' );

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
define( 'AUTH_KEY',         'bQ`~xmZ[uZua8+LR}bA6<Ns?3_pCh-TA#A`ESsD;ztBz~Va}sw O_A[D6.ZI?!ya' );
define( 'SECURE_AUTH_KEY',  'k<H5cp0D6)d{-eweG$i|CaS*jY,p:k@irAjb=7ij2pY>0?740u(?h!sdmK&q<T#z' );
define( 'LOGGED_IN_KEY',    'UDqG%a,ekz^Nw)MIzd/_]{eS0,+vFX7&R>eEKubZO>ZzkHys`6Ph7NOwK&spr(f#' );
define( 'NONCE_KEY',        'aveTa*nB;HseR%hc[^37dJX$dHI&(`jU?z<M4`.|N2eME;JTcvUl.Axuw=2!P h#' );
define( 'AUTH_SALT',        '&lY/ISY kHSqo,CYpE.<3/&??z=C=L;^Jq50Ci4M]<?43.{q:ppq}5f]ey|jR/(<' );
define( 'SECURE_AUTH_SALT', '7B0H%`h,YJ(TUyK&!p)q3elva=ojuzQE<oJP,&Qh> ] Ezg0OwFJ9v[a=E~a}7ld' );
define( 'LOGGED_IN_SALT',   '<4z$qptj@1swB9nj46]+]kr,)B[nn&>kQ<6kJKo|19i|ghO&Gf$tJ.JU!2&7g.@i' );
define( 'NONCE_SALT',       'O|H?|#OmD<^)4sj{A,pbNaKflu=u:~u.7p.J<xcZcTMF,pO-*24FHxv%RE[QdixN' );

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
