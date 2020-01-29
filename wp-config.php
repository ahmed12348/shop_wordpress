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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         'k=!ZD7;Y$O`gJz/2IL)^a<tO3:TX`O!xy=-&!-FP@FfaD$UCOrq%+yD^GdKPd+S{' );
define( 'SECURE_AUTH_KEY',  'MsEO=z- -vtZ9v~^4[zjRV@;5P<:`YR5~) mpq+)RJEf-s(MMb]=0MpMo&~UiVtx' );
define( 'LOGGED_IN_KEY',    'o&kl?;Bzk`wnc/uMi:caYqL>Ll2K(Ksie`{}F:)sWFj$mkBLdC:Z-#KP&Pq0:RBU' );
define( 'NONCE_KEY',        'fPE@)BGL.O~DpU!!bQOLI[N.ULtAK;y^.3W9bIVB&1@.AEh<;]N9)z(K)d6-Wq.0' );
define( 'AUTH_SALT',        'm3oxSIvNv-<K7yJ#>a{2W{`V9ma=c_4TxH-y_TaSo$J4SDMw&9iG;%RRe#|Qh6B(' );
define( 'SECURE_AUTH_SALT', 'PG`=`CPyS)JGIQXqze.P[J;F?ASTN;v+uP{$@(%bB$tJ8S|&b,~Q*|qV[DFq:E(z' );
define( 'LOGGED_IN_SALT',   'Q0de*cQc7z 6>cYY`~<;x`i>Q(S&vl ~CsilimjM8X$hG9D6|id9v)rs_t8H:?xw' );
define( 'NONCE_SALT',       'PK)/(ICz _rUi 2C G/BBXmg9.i8n.slJqKq;w$#) I$I^wP^r`IN2j@P:Wua)0+' );

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
