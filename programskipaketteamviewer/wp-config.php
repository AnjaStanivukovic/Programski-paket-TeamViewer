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
define( 'DB_NAME', 'programskipaketteamviewer' );

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
define( 'AUTH_KEY',         'pY^##uf}GM5@uk[U6c^Ro#j#,gKKA*3tq:0XRY-5RBk[Z6Og%`{tcAOh?tT^WZ)P' );
define( 'SECURE_AUTH_KEY',  'y]nqxY>SXm{(b63W@vhyn 3@8F]sDxa.EhKR dC~`X,}Oz%(^;X}S%Kxe:cf^h5T' );
define( 'LOGGED_IN_KEY',    'rRFzU!]:%2Oc:_0HOL~7iUbwAm6<jw9&(l?6&L+@LLKXpnR?VXxA a .Z8(x-{.m' );
define( 'NONCE_KEY',        'CqF+K$ujZKQ[*!pO$z2yP}-d]hk7&>*CJL>CpCiP,J3Wo=wscT c]ij.Q(Dh:mpg' );
define( 'AUTH_SALT',        'GQ$6v4h]X~%36JH:vOZnV=(G!yt`EVP<Cw.g@RjGj5gx@Z)Gn5U-b_e1l.):m6h7' );
define( 'SECURE_AUTH_SALT', 'q/*_&RI]-cyQOdtA&]xEw~#. VDFA,yx)$R*HalvylMB&zbDypF[gA_{R&@fL)-H' );
define( 'LOGGED_IN_SALT',   '_.`^iZUQ*t3IaoA0Y=ZgMdy:{}*:#`rnsn:`1U0D6}#]b7$0-PH(*x`GdJ|Y?246' );
define( 'NONCE_SALT',       '0EqdP  bUD`M?1k%;{w`_-,wv?>SS6CoPpxi-%^@@/MWkDMDb+jsgwBts~Cwu:s+' );

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
