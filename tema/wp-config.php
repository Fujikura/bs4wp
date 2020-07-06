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
define( 'DB_NAME', 'bd_bs4wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[EiV4cb9s~R;s/K3Z6[#`d 1VVv]|pZjG} nwM 5TUD{&64(q)p4m9I33hU<s<QI' );
define( 'SECURE_AUTH_KEY',  '{c.JnzbrLbc7/TZKrwLA4}N4kru*Z+v&Tz],qFNGkNn7xQ(THQW@9o9+<,H#sBck' );
define( 'LOGGED_IN_KEY',    '|.JocDlSL r80fT~zc@P 43xS8+7JZ##y05ZWPC(f}9+?21Es+)p+?cOc[[^U)EG' );
define( 'NONCE_KEY',        'N<KeLp6wdnFl.IiME;qcEj`w[Ke*n4QaT2Cm[z]HJINrC`m:J >cU`i!`Qknj}`k' );
define( 'AUTH_SALT',        '~Py2@~kx,6avh6wfq<+M-n:J/} 7k.Gu>j>T).%^)gj-a,Ul.y]G>f&1wgqF*9oI' );
define( 'SECURE_AUTH_SALT', 'G6$L5-^xe$Oa`|J|m0Eopqr+ 0)8lDUjX9hF4~q)H4Sw5B~<2QAF?$P4f*?r4:8R' );
define( 'LOGGED_IN_SALT',   'YVh]CPGH%=0FxkW/B`/Y*I|Gmn$SG:MW]D,.{G8>:8!~)|qD3;m~1ON>w_+Rkj8_' );
define( 'NONCE_SALT',       'Z;cd)lwr%!yQuH~2VqNUtOIQ;jXJ6>42_vte0:.Rs[4J`>E1wtz=t=Ur[1U$~hnm' );

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
