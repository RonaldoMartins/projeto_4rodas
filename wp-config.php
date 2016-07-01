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
define('DB_NAME', 'db_abril');

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
define('AUTH_KEY',         'A[J|`LoV}inQQ0W[_{z@xvbqeoFs!2T;PsLnRCu^NC/9i>)RQZU.WQ]Va(lSG75O');
define('SECURE_AUTH_KEY',  '(442j4N[*h(.|3hd r-*BR4AHItX:M>aMc&_7<3}Xh[Q}a}J_q_&n0K^FDz_ed~<');
define('LOGGED_IN_KEY',    ':,#2./Gtoo8bAP1/q,_R2Wq(i3viM46TV&;Q;XkFfa!  evL-t`Z6?Ij?^RGs5yD');
define('NONCE_KEY',        'G3lVK!Urt}/1)B3![*N!*_>&~y}8S@z:ll>$-JA+B>4X;BZ;Lqy|Ous8muOm8-OO');
define('AUTH_SALT',        '[js$!:t,O2&Lr)<*_I$1&=ogQk6&Qn61.#G4!hfD HY7g4;;V;g{rfpp.K$SEqoz');
define('SECURE_AUTH_SALT', '.5pMcxD+Y,=Qm(0(1M?Ib,&{5&~c{`ieE1,nR0Em(onN~g1Dt9fD+q,4M(/-SaS4');
define('LOGGED_IN_SALT',   'O^am&c17ANb4zOXV?3K$q>:En}aHdQ@J!4zx[:bCmI])`=gg3R[=hL[XLL!wVFFn');
define('NONCE_SALT',       'T0 `vD61^p2tPAybuCs:8WletSNi(qw&t0Bp{gLm?,z8rG{#W4W=57gFt8xy]#b$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_123';

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
