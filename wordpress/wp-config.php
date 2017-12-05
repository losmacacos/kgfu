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
define('DB_NAME', 'd2jljet10m16fv');

/** MySQL database username */
define('DB_USER', 'xbqchcqmahywjf');

/** MySQL database password */
define('DB_PASSWORD', '3134588892d703a5b5327524a1580e3ddcfc06fa520f77464bbb63e5f8efd55d');

/** MySQL hostname */
define('DB_HOST', 'ec2-107-22-167-179.compute-1.amazonaws.com port=5432');

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
define('AUTH_KEY',         'XhQ-&zCy&Z]y/%y9Tnr:7#*vo/9&W!Xc2pkIk&&sYBA?(pM,!YVvgXApfk5/5lb6');
define('SECURE_AUTH_KEY',  '@Z{QR?:+m_jBAcU$5^r<xJ?=[%10)Q0Ke/5=iQ(wSn>Bzh bHkvO.?0{|6uS7]I;');
define('LOGGED_IN_KEY',    'scMZi{q$bIDvC)gC{,RM2g6aJ/--dZ7i<F^Z.l1P}x_qo;<Yo/n/GS.YV$<V0n[%');
define('NONCE_KEY',        'wg]sI[-p@jg}gK4>lw.dOEcwD<V2!N5;&VwVp8,.@;t7v=Yd}f;+o5w<_)8M0_LU');
define('AUTH_SALT',        '8X},nE><oz&]x9Q;Be`J4I9.|R1TIbJ6U}RpolQOgVv:++5t=+SezVdpyS>=3?R3');
define('SECURE_AUTH_SALT', 'k*5khbWr!O.&i 7O=9{hg9&=M]-SkUB&DNVr#x!s?N[DrR;H.pBR7HagefIz9_nQ');
define('LOGGED_IN_SALT',   '%95%`CykgItv/n=`r`[j/2T~d#7gX7o>+twE-N%&`B6NkeA9T!0=2Qg0ilp NRG@');
define('NONCE_SALT',       'Qs!t,~f6G1k1t&4t3CjK!H ^O{ JcTrNwz2Xn_xW) ]3g7i9*m|B_hZFxf]Wg<4=');

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
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
