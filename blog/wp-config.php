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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ':>Vrx.%jio>go2/POr;N_=kE5Gyv46wTDIrdFeL|,&C9_<}~Xa)V%T1*h*Gj+.T#');
define('SECURE_AUTH_KEY',  '3q`1+|$YG^P->`@Gt=7>%& C9@A,]<FC~HU #%/LJDM%w9tJ#AKk]{{yUZvP;dc<');
define('LOGGED_IN_KEY',    'ljkc2+&Cv6y2~prz]+,^!-(vV~HO!e3+]aN;(P^S|,JZCD.1]i,.Sl/C.(zNvvJU');
define('NONCE_KEY',        '|27Puu-0?=q=S]uEtEsG>xhUkBikcjrw4?AkD{V1X&y>B!B/0w50BC]fIQu*J<YR');
define('AUTH_SALT',        'd)rn]<U8fB|:? JUkR@d:FRSP=ik5mx[DM(iEgb/qym`yH(kItF;!B[:QtVM%PND');
define('SECURE_AUTH_SALT', 'tCangvo-Wj2I!f^K:C![uud?AxB/+1L?Elg#iGxm2AFNRc=>%&-B}TP^ksn@`|KC');
define('LOGGED_IN_SALT',   ')]QtE:1rZjL(:4ZA}![mBfS[ogJ:_H-Z5ET>q%LR9UqsX720)9}=:y>^rutPyY34');
define('NONCE_SALT',       'bp~)t<A(aLd6~x*r[E2>D-yEcy_EMv8H,3i(Yr@hEFmTN!K%%QT6/0tdxQo]ZS-&');

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
