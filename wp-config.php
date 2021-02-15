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
define( 'DB_NAME', 'joemarcasilang' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uatqk7x3tqahdyn2vdqupyfmgee0zsbt1s9dvefeaxckdtxtzvv2adx00dl0xblq' );
define( 'SECURE_AUTH_KEY',  'nrljb6b0z41i6y65gqmvtowwzx0inqa02pqogz2wcnnjg1fdeirnwlb0uwlnodh0' );
define( 'LOGGED_IN_KEY',    '4oyl8qezbc0zymeuqw7ybth9qhvxbxelif2rl4tvivuzcrbr8ghn2e3l6xngqzmt' );
define( 'NONCE_KEY',        'zwcz8h1quh44frmw5rwkzyxzxjgzogqvciuakenv3a9ouc0v93zdytfijoxpwnwc' );
define( 'AUTH_SALT',        'skrriqtwsghma6mnexwdhohipq3yi7t2uunvp6f9oseoc5bflzbymo2gz5zp5e4m' );
define( 'SECURE_AUTH_SALT', 'bhssmrtmdhvj06baiqyul825chgmhwpk1yfk3vteat65tvornlnhxdxowmnshkwy' );
define( 'LOGGED_IN_SALT',   'xizhgaqarhkusgaioa7brutqsg4wik0ngf8epryt6c9g5qrcf0k7jise9buo7asg' );
define( 'NONCE_SALT',       'z976zfuldhxu5dqh08es0arogqlyirn8b1pydeywcw80q5zaqekziotiftolghgd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jmec_';

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
define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
