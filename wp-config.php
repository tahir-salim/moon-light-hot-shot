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
define( 'DB_NAME', 'moon-light-hot-shot' );

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
define( 'AUTH_KEY',         'Q$jQg($s!hUgr_4KRdHb qGr9M#bldSCdBW9<AV`%5H%7@t79{&X@lHQErLF!#Nx' );
define( 'SECURE_AUTH_KEY',  'bc|F=>QzIR)+o|X`}NF=M$3Jq$hu?`4+Fr8IfNO}UYBGFHw=_oXfD:umU8 |s[K!' );
define( 'LOGGED_IN_KEY',    'G4yHDnRu}kxP`}(^ LyMWD]F+aL>4P67_;IohIf6kGf41B.-|V<Lo_yD]qr[l>YR' );
define( 'NONCE_KEY',        '6`V;S)tmU)W*dism`o5>t9,HOF59i36Iruq-06+{Qda{NU/8R8Qw})S,Sj(9j^Q7' );
define( 'AUTH_SALT',        'I{4-?wOT=xlF7T P0M>*~}Lr)}]FHr3Oll>Qt[5PJRMYndz(YR}JukmDts8ESsOT' );
define( 'SECURE_AUTH_SALT', '`NQXnJ4:;xh0UBoF[DrG:HUR${o%Nqn#YI(c1oU5<:tUA|dozPyg$,_M6hBoEL[b' );
define( 'LOGGED_IN_SALT',   '|7#%G`$>?#|fSLO$g/)9`|y(ry8R5iisP&l#J3XnX[i=~O5$GhgF3lp/Buy@7K#!' );
define( 'NONCE_SALT',       ';h:,OO(`eq*hawxbM5HP6R,Dz|[vf]M-OT_&)P4E?z:|]c{MHZ$&&6vLE-i.&VMw' );

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
