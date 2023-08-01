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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'tmzGuxVzDft+tIf8ckLYgXVhTHGfAY5vCrDJAJniyiMHULyypRiGL6JawoiIvcGXqBEGMOMYvg/8WAR+owJZeA==');
define('SECURE_AUTH_KEY',  'LDgpwHBNsNJ2Q4DoH9J2jN31KyDjSXs7lBxUO7Ee9CbwvdVXeR/sWPkf3GgP/cIzE8rlGoNbM6CXA/HKuGyOvw==');
define('LOGGED_IN_KEY',    'bahulYLs5epZVwCZAdgjPRvBZR/TpOtWLz3P3e6EKetwmYALlX+nN1E3vr56FVyuN7EZwdgfLpcjjgtowgYQuA==');
define('NONCE_KEY',        'Oq13vruiRljH3VDKMUxHncokgzbE685xT1QxuJbr3K0QvVZJD6Wf/WFwtAo73oV27boz8nBnVD72wB6HfWD/4g==');
define('AUTH_SALT',        '4liIpHPO+p7Kopou1GXLe/AHj84QVby3Ko3oZNLZr29fBJbq4LU/gtazu+xMUvbSOT1++sHo8lLKLPt5Sn1xNw==');
define('SECURE_AUTH_SALT', 'htcpEzBjKN6tYclu7QSjxj1Mnr6I+r5AgNPFf2nCW8MQPoCBUaqh8A/NN3BaX51EuaFFrmRDu6EbOldUv96VAA==');
define('LOGGED_IN_SALT',   'F4cAeBiX6RKomrWOSWtXjXDcgwt4kYmHXHRDeEohGAJdka6YEhGlJ3Ueykq3EPo8++lPG58pJ4hymXGuUkT//g==');
define('NONCE_SALT',       '7mjSfls1fDcj6IFDk11WC44xjur2EkGfuipujSdiHPgBpOLHf41OOCu6EUojqtZJLUPultJqKccgTrfdTI6l5w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
