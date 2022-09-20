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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'firepowerd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.X{E3&lvy@0EjJ(xH<8<0+[|OiXRukz3Bp|(KK#opxt+>7Mfss.g^ez5m*s[g3$M' );
define( 'SECURE_AUTH_KEY',  'AvlApe9sX,!$R6m)Ku<.Re}6Wai[>]K<D,o557n ~Ae2WLoT$6/)S_Ov;Ny>9FFL' );
define( 'LOGGED_IN_KEY',    'vKMS@^v&ZVc&$:r|m0t>-S~!P4R8tL:b(=dH)ww>T/mU_|CB-|P-?XhO*+swK}#Z' );
define( 'NONCE_KEY',        'Jazt<MxJ3rc9G-OiT>{vtPI{Jj$@, 1yWIq=k/0ZWH^[0k^<U(gXYhT;$v` GC71' );
define( 'AUTH_SALT',        ':AgX4DL +(&[MgUN!j{**F=4A5LZ-[?~ PA`9ZHDBSj?cSNlw0{gDuQ`5*~kV*KA' );
define( 'SECURE_AUTH_SALT', 'j8VF,awAThV6!ueTA{5X% J .j*Ed3-7eO?Nm=%mo*#8n>s]BtP!6n_haMR,ntT1' );
define( 'LOGGED_IN_SALT',   'o%X:4AZ<[323ak4q}gJ[BtHOJXh.3T5lGn^P6Uq9sntG1l?bW``bSb#]Q4&%N#{U' );
define( 'NONCE_SALT',       '=l6(QdbtZ0-nOE0luLId+QPz%]I~1A:4&n&;E2<.7zQJkg]nU()1Y|k<%Rz0c/Dp' );

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
define( 'WP_DEBUG', false );
define( 'WPCF7_AUTOP', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
