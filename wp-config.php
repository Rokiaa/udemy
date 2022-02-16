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
define( 'DB_NAME', 'udemy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );

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
define('AUTH_KEY',         'q!gP`<!an/K%Fj]!-V%_b|aC,3_8DCmy8=v$XDgE`)hav.(3zmI&vqV=e;auz:@,');
define('SECURE_AUTH_KEY',  '>2(NIE/i?i*EFfh>,p*Wd|WkfQ*:zit5%X)}Nz$g*T/S~sTY|T.Bo?mRMic omIO');
define('LOGGED_IN_KEY',    'mE1>2~B3$`7P|WSmQv8AS8!7Es;ZlG!24+A>b@>35mQ`49>bE)({IR|GU(Z3@VS_');
define('NONCE_KEY',        'AF&Qk(j(eV/[?L]E%cSH5(,c8>W a!_v7:4{I!gHvw$#Qe=kD[Rc_V$r]*6J734(');
define('AUTH_SALT',        ';aB1QGlK`)=d>&Y,nQxr5V)zjiy?Q}2e-e^,9Av{;.>#nvqz7~FQRmy3pn^Q4+$c');
define('SECURE_AUTH_SALT', '< qi2uF,,-jeB9+G-&MqcB|T!;=Cl^,1O/W$0Q@2LhRPmOl-wx96G^[= }zuCc.=');
define('LOGGED_IN_SALT',   'dGOoNF{EF):{JaGE|F[[JN-AiQCg|%laMW>KoH$z$Z4c,RdUF@Gk4LY5}om5>Lad');
define('NONCE_SALT',       'XgGVk9]&J$zi`f{xQgO%~>7Xd)5&K90/<=lvef@rXzIXzuoJ;{+ IHhX,3`htpIX');

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
