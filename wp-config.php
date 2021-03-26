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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<z>K[9y ,6vVM2iV}2^NDYb{np>XZ/07ymOs~IT__G4@W{LvaE`kM;fo.!etLnzi' );
define( 'SECURE_AUTH_KEY',  '|<8K%yTRSfkM!|BIzOWAxn]g@>-7i7O?At@{ 1<=36DKo?;dR80~+u*^3]P AI!-' );
define( 'LOGGED_IN_KEY',    'ldG}meO~wuu/k:n6_h#a>.CxSJyyJO9^1>D0Si<6@nu!^[;-Nto~yi1Z=oP``mSz' );
define( 'NONCE_KEY',        '--FfeUx_*RR1ub}x@>*4;>~f*P:ha8B`S;,=of69Ld|M2W#Gz=nIYnJ4V$_LM2`e' );
define( 'AUTH_SALT',        '_se`Yco,iRmtV|K-SG?]hjq7W]QaByNZ]mubx:vd5]jT:PKB$V2PsDs[fXofHRGs' );
define( 'SECURE_AUTH_SALT', 'yi2H4^-.j)Ur#u`R6+U|r)0w+(*=6rw321mF=6fM`Ga-utsxgFlE#A1BUONp7+Oo' );
define( 'LOGGED_IN_SALT',   'QjfX{CeYAO-@bO(SP)yzh`p8VA0VG%i5-}(c,tA4=:85w3<>:5TGP.gVjVSn{6!?' );
define( 'NONCE_SALT',       'D$.UFr[xmhgDxZy^*b6s]ur%$=wOaN[FdArd[.hhC+4$qM,0hV|!x1%krcEvhw[M' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
