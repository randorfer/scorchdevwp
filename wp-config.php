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

$DB_NAME = getenv('DB_NAME');
$DB_USER = getenv('DB_USER');
$DB_PASSWORD = getenv('DB_PASSWORD');
$DB_HOST = getenv('DB_HOST');
$DB_CHARSET = getenv('DB_CHARSET');
$DB_COLLATE = getenv('DB_COLLATE');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $DB_NAME);

/** MySQL database username */
define('DB_USER', $DB_USER);

/** MySQL database password */
define('DB_PASSWORD', $DB_PASSWORD);

/** MySQL hostname */
define('DB_HOST', $DB_HOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', $DB_CHARSET);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', $DB_COLLATE);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}Et*BY:0Wt;WUP&0p7|w)g-e,YlEPe)Yl?MTe#__2KXar1so^D@6%G/kAJbH4|.Z');
define('SECURE_AUTH_KEY',  'I]T>$]D@}@d#ONI`XxjjM`#=z5pB>5*1A,leokt;|H}yA_-?o;qF-g2KUi^<,6,+');
define('LOGGED_IN_KEY',    'JsE(grEyLRN!kF8pHxaYjNIy+{hNk7!v,7iU:2E~Rc3xq/w$i+_;g/TO8!xDW`Yv');
define('NONCE_KEY',        '+A&.xAA7l,#?ipDs@VaIg7M!F;V,iO6+l@taOkusg9!k;.ENpa!C|.lsA!@J7Tf(');
define('AUTH_SALT',        '|^B]y2sZM=*|H$dKC`4I-b32csVf!7p#0%O;An(cR}kO$+-FZ_Z|41WARdg3}z3h');
define('SECURE_AUTH_SALT', '4_+7B*v@a-Ek~7q?)-!H(q0-@c/)<)NUD1C(5S|=H>=@p+/X3oL(.}+T8G}~D,=N');
define('LOGGED_IN_SALT',   'y:6&o]s7P;| ._[~Zz|e:0_d!Dd?Zy|({u|dnrkD/-#rwLtrE1ltA)zBTJvJ|Ns-');
define('NONCE_SALT',       'q)ZKJ$*}>Y# jR_+c;y[zX|`sK4HKS-N-1t3K:ZT/6D{3W(XZm;)=vd)^S::,,#a');

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
