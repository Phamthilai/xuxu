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
define('DB_NAME', 'holidayshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[nZyP>*W!:Vi/Z~dx%H|A~kG~ae*)|Uk^:%zaZ|J1;>*se2$ kvFo4j2-tJl*;vQ');
define('SECURE_AUTH_KEY',  'qw{mLV+i}hSeFw_Cv=jo6{-:S@SJP%6X90L}Xuzh}Cof(Z|Abgf-!|&mNKqH5g;^');
define('LOGGED_IN_KEY',    '2*IRDowc:A.kh`Xy%L+ [*rQ} 5W}(mtq0^S(pFzX@.Y&T@[Kd FbTtuF#qOW*bh');
define('NONCE_KEY',        '8_lL(`J~^%%Qee:ysoRf1||F=u!?![Phk< mJ03R_ywf1pC$#^<nU#{2ryf#ghJY');
define('AUTH_SALT',        'F0jUgtKgmBM]RDlWb@#4Dr7)oHXR,L8g@tj$&2N,OLzQSCvPX=P!,ior)3^y>`_~');
define('SECURE_AUTH_SALT', ';mi?=9d60yR_f2`<tRjT}wxrU*hOx+YNrbXj>IZy,!9%?1*W,VN]iT>_Xh>YET6u');
define('LOGGED_IN_SALT',   'y58x<r(.k+d5.{Ol.,6hf=.a@Pt!/zy<F_+V0z+bSi,w@i}wR`/ Q 4C+k~m|jud');
define('NONCE_SALT',       'YUj]tb9I9|yy<l+9|R5/C4/v#cnLEw^J!GtO_rC>:ITtA|uUuz#Q}Dlk&~)a5X6#');

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
