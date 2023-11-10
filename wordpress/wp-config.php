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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'G/B+cRl#)=.%K.OdD{x**VT/?hJt$pRW0iP.R2fNgPE(oJ.WV|p[ =k<;L$i436G' );
define( 'SECURE_AUTH_KEY',  'z)?&`@t&L-zL1&Cp)rF>d=Sd2CI@!8)P^8|27[YO,^NISd7UE9qjK]NB l@!9BZH' );
define( 'LOGGED_IN_KEY',    '*xi,7+L:Qzca4`6 !(7?`iz&e^Ru(&%,$OEbLtA0SCj0j*OBu(U|8~dQOy&WRb*l' );
define( 'NONCE_KEY',        '=wMi#bcV;R.]Q_<&L7`#@I1wtO+x9A?s*zJF(6>l!KLo)Mbz<Hm`<.Cb0KO1K<;T' );
define( 'AUTH_SALT',        'xF^(dnmQN>-_2Z3tC3_~1?0(:g)$jbPAR#qV943N2)5X@x34X`(/QvL+slESkK9!' );
define( 'SECURE_AUTH_SALT', ',Q{_{QI5(&A9sj^9[)v<`KFA]=3}|Vc$EEN{^7_oDln?Q%fyQeCJ6X#Iv![F,S/l' );
define( 'LOGGED_IN_SALT',   'Xa+}D74:q:|QBL><S364-iI9w25pC6LOuEF_IaGJZF;SaQRi{wQvt>;p8o=!muBd' );
define( 'NONCE_SALT',       'Mh%0CDh5A7Ha_$f{@*0_*~G^Bi}+)5G}}KsK%keS.h*h91?9(~dtxO=D[*:4.TZd' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
