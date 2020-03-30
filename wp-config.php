<?php

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prcokme1_wp' );

/** MySQL database username */
define( 'DB_USER', 'prcokme1_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'drruZf0Bmy5E' );

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
define( 'AUTH_KEY',          ',x_9@.+N]91k/;ay(YI f!i!K>?I+^8/#d8G^Ig@dvN;[pD`.v_<.n-):v^`|%<8' );
define( 'SECURE_AUTH_KEY',   '.?Q?#XX24mW^AGtP/R$mCt&sm{g!e55Hv hJW?GCYBl0Cj9,>>L/(4yx6spO@%g_' );
define( 'LOGGED_IN_KEY',     'rJYO$$u2H{h(=vM >+U. 1z_k*;Nl%h@9e9AD|BN,V5,GeqGw}&f=@XjOzvg#:,j' );
define( 'NONCE_KEY',         'Ss5?}SP+Y@ybR1jb8=]4*XuRa<th7X!6~T8AlirUV_?jy0dc_:;C_UHU~#,_G2St' );
define( 'AUTH_SALT',         '&+L/aCndo;=%*.Qo6r|bW1l;-z*3)GHHu:`k6l1RLn|+!=Ck:HJPsI3OA>E8r@yf' );
define( 'SECURE_AUTH_SALT',  '$kKI1nqy5d<1.3Y=FK6A_?G4.0Ytqs-}^z_1}3fwBXJjWj&97mE)ZWt&Pw4M.VPV' );
define( 'LOGGED_IN_SALT',    '^*aOGO0D)pC@e7xyerMxJF3]}0s04LnNURdUx!58:T2B:TwD`vULBq*u 6/LjD~s' );
define( 'NONCE_SALT',        '6$PUDIO( (0,4.vZlxhXzUu/B[eXJ,088Ld~W^yY6SI/~ _EELa/C#^f[B1pc0_g' );
define( 'WP_CACHE_KEY_SALT', 'jV<SYSHv%a(7[_$JLJe3}7r{+-_vZ{A;P47(e=p<}`MH>cp|pTNHKj{1wTIoAI.e' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
