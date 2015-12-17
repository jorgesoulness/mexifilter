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
define('DB_NAME', 'dbmexifilter');

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
define('AUTH_KEY',         '->UH+EsnR{~I-vfUSJe0G9wG/MicpUFp*6qizNX:XmCHAWd;$~$__o>G%t;i}sms');
define('SECURE_AUTH_KEY',  ')3]XXIL]{W#r*=~.6i>#z#kJ+0:p{`jFZW~<teyzU:p+1 r+1AHC`cblx)-AG?bT');
define('LOGGED_IN_KEY',    '/9KOR&zpQuhCi5cH~OYfVv^Wf,IqP}cxBxoI}UMkZK`F35#r8+_zc$*SI/l=%i#h');
define('NONCE_KEY',        'oqr[B.%)=6h_Ioy5v5wT/s[t )8|7jpte]]}TpOK0jeyni2x%[<9`[(;-^P=0^KZ');
define('AUTH_SALT',        '&=YXWTai#:qV=gx{d&c!;Bj/y1a%;qV@_nN6XYB(.y>=jx2*yuE0^l9T6,90(9,0');
define('SECURE_AUTH_SALT', 'IBGbnwDdh!v!/8;N]9=M<H]WnRm?gCkK1qLJBKyS9 FlnWpjD%d]5n#~0qOa7E/8');
define('LOGGED_IN_SALT',   '5X}9g>u<k!S}k./k~F&~MLN>f;5q4~DhkaXcSU0Dj5:NCr3P`[6i:k|1/glNrxBV');
define('NONCE_SALT',       '*zXTK37Id5-,5{,JN2e~y$nxN9sfmNj,[Ntp]I}hT2r=3Q@* p;hw7xT$G rAL3D');

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
