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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4zIZ@9-~@kG/7o5S9vh-TA*_+#g-nh9{N~ZaY:m!isn;2lfDB29h[&WR4_MS?`5%' );
define( 'SECURE_AUTH_KEY',  'b,6z-CIa6~!r+NoASiw<|.7cJ^ ?4@$SMZd S<hjLg|i@7w }>-?&bYq~Lh;!Y.C' );
define( 'LOGGED_IN_KEY',    '|x)eX|9GQ2o`PXVPWdYxOiUDBia[kncC4uhve4i2`,m [+9Xw&+O3r) -/>;k8/1' );
define( 'NONCE_KEY',        '_N|CZ//*Y:CpumJN<2l]Ytqbxs;&;C?yt$150jDf!<,fo!BQws7U9XXNl1kt!>QK' );
define( 'AUTH_SALT',        '~ue~x_:].#B:GevSv+>gDL/t`ftz4;o%C(`,OgUKUhHj{y2UTa<MYtCmT*5AGo=?' );
define( 'SECURE_AUTH_SALT', 'nG6>1JbO@!rE?~0lg)-c~%.Dc,/6tXLI*s,wl9~ bG.|)$6JYK6r^f;IRX-Ydk;b' );
define( 'LOGGED_IN_SALT',   'r7J+z.|dHX(1VGZQ9x~F*m[jn+P~tTdz+PY.WZkh5Z~V$XIn+_n*:PuC$ H:){2g' );
define( 'NONCE_SALT',       '`s:>+]MY|KeJg4+`.uyjP/^LJ|dB <`5`nf~B@68Xs#`IB(ZZ4gCo5bOVJy/JnLs' );

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
