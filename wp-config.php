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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'esfera');

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
define('AUTH_KEY',         'li}/oxq|@JOA }wbOO.IiKm]Q*[]/dN{3mN@FC)8l<0Qp}_4W7qM rn4KD0E%g&]');
define('SECURE_AUTH_KEY',  '*8J|t{RBX*i_,`PBj1]~ZduH Gu]<A@@#oz[Q}ZPNmQ!U40R|rS15Qi}Abyg.F0i');
define('LOGGED_IN_KEY',    '=kDu5y|oYk5(Y->Kq-ohO&92lU|([`Q82$FU]hcw6R))6-iBix`db#6pc 6kn&B<');
define('NONCE_KEY',        'R`p%v8*H(BphA`o%88O}xB{TU=Zi2ah-x)Pnag7jp_T7 aRmsBDm]={@WCqtUDaF');
define('AUTH_SALT',        '=Io*v{0fbECREnm&urWp7Mf$M51Adq~Lw-a9Y/Lj.0=Y+Ro`;s{c/445jA3m{=.g');
define('SECURE_AUTH_SALT', '[2B6{x;RRf{;0H= v%b[O~&&f4`E/_|h.WXN!JjH3ttvo.L}nC7W!`W&%]3t{=eC');
define('LOGGED_IN_SALT',   'vcO.>6(pOQ<8V+654}fG>Dr?2:SD{VVbkqdhv4U?o* Jblg@595!]MAwS4OGymdF');
define('NONCE_SALT',       'jSdtWP/NG#C/Un^_5LI_w;p),?YFcJ_;0:`/-!I9c~EgSAe69.HBuI)&KWE5 6C1');

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
