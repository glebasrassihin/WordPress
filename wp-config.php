<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'noramlno' );

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
define( 'AUTH_KEY',         '=tyD>-~<Kq]TRh.hC% 0v5V}<P4)DM,Y$89Ob3=M%R:h{-ABYw.]-&!hBv`Gd.Rl' );
define( 'SECURE_AUTH_KEY',  'RU5nK42,K$Ouu6*NIKysl7.`FO9F)N(z[C[Nyp&fp3{6RcEFksG%6PPN6!gau7bQ' );
define( 'LOGGED_IN_KEY',    'd3`WJ/KqoZveXR?^uFfahgVHonjWxygUPA6$}2I`,3A--i]Ve2vDOFP^Tem#Sc@V' );
define( 'NONCE_KEY',        '`b#Wrbelf.:=%@:wNH|;vHw r*~M5;$ap1;<BT9_Tc9j#C+e|U..(Ttvg|gYu~hn' );
define( 'AUTH_SALT',        '~#Dh>oChOy*]?~SGdxU8:|m:z#{f{|.3ch(?)eAEdYXQVGCrbjTx%0r}9R!A5n(K' );
define( 'SECURE_AUTH_SALT', 'K7xpM! >~ (4dV>eS7vw$-X^nLI)&wze+7jlw%^_IaFeS=/Np9AF0!ufrKlPL/pS' );
define( 'LOGGED_IN_SALT',   'Oi~RM/=1<*hrC0{/Mn~`hZu=L=Ajs7f3n3<AJu~zO#c0Ym~#$;P={m?LLw]3Tv%M' );
define( 'NONCE_SALT',       'yL1%6CAZ+~RNx8Xo59aOP)&=5~:bPS.Q[ ITab)48Vsv@Z>09B741lF=45J Zb8{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_admin';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
