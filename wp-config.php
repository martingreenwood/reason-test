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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'reasontest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'ISo +lONPqK6W[w/shDCj%dn<}!7FpT8tx1B|k|@blai]Zq6Q32Z<K 2dpdztD!_' );
define( 'SECURE_AUTH_KEY',   'ev84(^^&1`y+C}374yX$Xq{7CJ``9NA|Z=ENnc>Bvt=ya%;8_l/!u6g772DoNmJx' );
define( 'LOGGED_IN_KEY',     's(YaIh-%:E(3>9!c>MR3MOa*^}8|e:AC-wfH6-j(GD=;DPfMA+i/S#C/~M6IOHPd' );
define( 'NONCE_KEY',         '_,t_PjCjp9dvWo?>|P;Oc=XeR lu:rLm8X}SEC/$_#^b:){B{l9OhfO#,_Jpn|OD' );
define( 'AUTH_SALT',         'lnm=&Fk;*Ajw{`Oc<9p4*z0Q24),f@Gv:`d,EZsYir {EoY-|v[RYLS$!d$zWQ=!' );
define( 'SECURE_AUTH_SALT',  'VEpt=s) P<y }iNBxSXLEg5bxs]S{&VW~SoL6:]{a:N&`&XnRpCwLoBVq,?RDMX<' );
define( 'LOGGED_IN_SALT',    '!TDg^=A@w {M@Jthh{TyQ[YN}(k8dK?KW+KgQ&?j~h-n@j}X;U4WdxaqP^v4x+m.' );
define( 'NONCE_SALT',        '.%4)=v6S<83JtP7G50I<q9e!4Q~lArzlxoKW;z%YqKQ%5wlS=_q:+1r^aMz+ 2I^' );
define( 'WP_CACHE_KEY_SALT', '6uCE7T6-.x)|SoI=SMy(;4yfNe{%MvYTg-8e&-+MzMFJopAp4^bxRbuD*=ZeHQQ>' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
