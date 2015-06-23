<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_ken');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Shoegaz3');

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
define('AUTH_KEY',         'T#@rW:UtP4nI;t`VjV9UnMV:SJR>D=eXSB}1bd!Wh@fW}S+P)$f<QWs8n<Qi6j!&');
define('SECURE_AUTH_KEY',  'X~+WNbN*3=v}#GcX^h^UfM|~Ojj8ZMbF5EAj`uV#Tjw}F+!&!Pw*N6)n@Sy#^-;n');
define('LOGGED_IN_KEY',    'i`GlhavjXHTru$%9/mB`h)lm~.1B0MX&wf$7%Yi ,|%i[7_.Yp^&tKE>N|9G^~AS');
define('NONCE_KEY',        'irlOTbF6CLX5+Mj}?P/%+ungJ|.f [QJg47j~jJ)=oz9hSKf@MoM,}e-gBfdXB!~');
define('AUTH_SALT',        'C7a.1Xc[)-Vo#:~9+l&8C.J627_kL7hb_8J4wW{s]tt)m^$xwV9g<b{/r-`LwuK4');
define('SECURE_AUTH_SALT', 't-;-/Mc+&*=1J-3w`vVG6BzwqZfk@Z. hR-l{N*{2jBiY6T($ +Tq@cExGN,:+fS');
define('LOGGED_IN_SALT',   '<8Nyzu[EOh:R=7L|;C5{O~P2[RK)d_S1oscRXUgLa=!PmEVR.;e{~,xyi_ #cGd@');
define('NONCE_SALT',       '+ ]E+HX#iTa0J$AX;CJ60i?X$rA*EnZ~{CHg]a:kOd/__uAB@9j+7b_Wb>dFj3ut');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
