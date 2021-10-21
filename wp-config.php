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
define( 'DB_NAME', 'portfolio-theme' );

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
define( 'AUTH_KEY',         'cn{.>K?I^I++fb~2V=58?h)`<Gf*uAKX= v4KjJ[vD($xuQ-B!+Ah;!lR]e Us)d' );
define( 'SECURE_AUTH_KEY',  '+5?jF=6 10K2gt$5an~Hym!hj8FSN2b8=?/l)$k_a}34H`3^Ogy?L(XY?M.gp`xC' );
define( 'LOGGED_IN_KEY',    '>s~@ 8;irU RsiIUl(Cvh~3.;WZ%Jn)/:hAc$(r]!4Vv^kq.@8WJX_oC&=*qUKjC' );
define( 'NONCE_KEY',        '$Sl=kMILx1AutljGhR3`J8s!suKqk4@h==`;h<]j_>rJxe)ou2)wic,vsSxluc9*' );
define( 'AUTH_SALT',        'mTOh6TS7ss&(g~DM_:lSzH`8$)-E+eVq}?FSf(|ix<I)<VE^y-84Wgl?Kbj#w>DH' );
define( 'SECURE_AUTH_SALT', 'v-pV<LyBdQ9$CZpg>uhH`Pbm]UkF~_*S@zqD__E<y#M9hw]-Y`cVB[`XD^`b68u)' );
define( 'LOGGED_IN_SALT',   'l.|IlT-&Y#AL*?MdN~[aN20g=9&PKI~Gu`,t#^J%fOlL_]pzXM[dJ@W#dDNzZ1bK' );
define( 'NONCE_SALT',       'I4EUlx1VAq$Zl?O#zhk`(B6-+R` =oo&w_W.6.FDOJal!cPH{C;JO@v*T9s|{]<w' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
