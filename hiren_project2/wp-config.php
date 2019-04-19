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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'rq~=WlI9XpwlB,_k{w#nLEc/X.@j-*]H&t_q6kwC<3Wz z(::qkhr7*U9FB=O`7Z' );
define( 'SECURE_AUTH_KEY',  '.j.Jll6s)_M=%5ea4D.(-*CD&veu;ns{?H6=Knton)U]n#:pXR9~}`:S8Jh#u*}L' );
define( 'LOGGED_IN_KEY',    '+Hu%}0+!#7%o ;-htwbhf]D7^Ah)$fqkOOHPUeFI_SG4{>|CA/Et)1HXy>&gD_#J' );
define( 'NONCE_KEY',        'd3&%w.HLQ(?`wV+nkowaE#)-]MYzl:6h?~yI&PI4b?qEbaEI9tQmN)_YZ0P6nonW' );
define( 'AUTH_SALT',        '8HhOLomeq+hLXS/7wF< X,Re,d[4QfkOjbd+zz5b5]%7JFx|le;aa*nA9sG1= *0' );
define( 'SECURE_AUTH_SALT', 'b49_A)+$#Uf2o?)?%NT]veC%Lvb4r:fgHzz8.)(P%[+--lU`r_7Ltj{QVwP{(gCb' );
define( 'LOGGED_IN_SALT',   'OG~J;/NjF}t7w/gbSlHc2]/4j=M@`oS3.&%r j5~V_hOR<Y]~> PU3kvV5(Zulq?' );
define( 'NONCE_SALT',       '0B^If~EVsos12=5y}5L-X{4+Ha4&xX5/iYHJY_I9P I8YRkEjT,T9AC-k~Ks]Q#n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
