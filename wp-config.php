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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mecanica' );

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
define( 'AUTH_KEY',         '&,N:KtaXIgnc$M@XktMX+8SW<zOdz%-~C!cL5lA{Aw+)30-q@5~vbDw2sU;>ve?n' );
define( 'SECURE_AUTH_KEY',  'T1,+GA/7v-9RJaM;QV&qX0 2!791(^:yP,9+c6$w;b1c+/?rYwb]p?O}k5Q|5g.g' );
define( 'LOGGED_IN_KEY',    '0k>HOB0UY-vx&K+25_,hPia6v6@!<IS7$emQx$jY3`H.|TSMP]P%iWUM (R/v.Oa' );
define( 'NONCE_KEY',        ']F?kGrYc,fS>h79>Q{uq`uE?9 7cN;vYb,1w{U[sa!Mh0>pE[egfX/~lnISh^op`' );
define( 'AUTH_SALT',        '18msX7i,b>H]l<~6~Gm#P<~NYqL }#hj0&6~ek`}79gfm5H6L,9ekrp&zD09x,+C' );
define( 'SECURE_AUTH_SALT', '2)nu?z>=0($;hr>JAcxIYp5/^x5~jEGw52qtO/dA3#x&|,,#>U{FHns:(pRmV+? ' );
define( 'LOGGED_IN_SALT',   '>x^.`_LxfnN279~(UI{top]*?:.1YLB [s%66~4Rz1*35Hg0z5kOlt#x1rN{oma/' );
define( 'NONCE_SALT',       'm!BDc4kBgV$?Y7vaey,d.OLIz/G6[VynGKRkz!]vmz7p!g<v<p(?zu6tEiT%e1!k' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
