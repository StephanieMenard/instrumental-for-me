<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'instrumental' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gv!n=M*b-#@1`!2VMoe{H-plQU#qm]N2_#{@<D)#]n5m8)|jZ[aqFE^G2-sz}W[O');
define('SECURE_AUTH_KEY',  'MHuMy=_n?BI-CD2AWQh(meF6a A%H[JMd5;TGzKm//}?m->c A% >J(ya)-V%/mz');
define('LOGGED_IN_KEY',    '@q8~{VQ{seBUX6.-.MoCt8CX9I)8xZ<USDC]r@J@kYol;5OiL!gm,Po1fIy_jz+I');
define('NONCE_KEY',        'hz3B( H-fW.N[_0Qe9co3T6X2*9G8]_K2h;b+)wO}14[xd%5CBj@.UAwbi=RBklu');
define('AUTH_SALT',        '( 9^z=Q6i|+]O|Ek8 v{Xgr-<)J<:QKaySU~U|Kb|D6shg|U *DJ!~R_RM6M+FSu');
define('SECURE_AUTH_SALT', ':E`NdrW?Z)Er=SUUocEZ&=MydTLzDSkp17*<a#9|Rbfey(I0ATZaa6ZB8_=FEGL-');
define('LOGGED_IN_SALT',   'id5=+Q{?ZRB>R}Vldn^7o3SG@VBE+Ua5~}3M`$!e./^u&06KUp_y||:5/Ojg** $');
define('NONCE_SALT',       '<%u4LZ0)L?DQ*`0J+w#_;E-xp*Si~$;]4^6-(rNU@,!t!{6AqPfOJ>$[aWq7k5Zi');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wdlwp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

// Configuration de la home de notre site ; attention très importan !
define('WP_HOME', rtrim ( 'http://localhost/PROJET-PERSO/instrumental-for-me/public', '/' ));

// pas besoin de toucher à cette ligne
define('WP_SITEURL', WP_HOME . '/wp');

//pas besoin de toucher à cette ligne
define('WP_CONTENT_URL', WP_HOME . '/content');

// pas besoin de toucher à cette ligne
define('WP_CONTENT_DIR', __DIR__ . '/content');

// STEP WP INSTALL  Autorisation d'installation de thèmes et plugin via l'interface d'admin de wordpress
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
