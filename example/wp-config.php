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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdatabase' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'C<n0SLU:9>IFBlbT(TP8gV$F}&C49^l/zi7w)O<D>4H~Ue`Ub7i3Vq}*G 8dQ|j^' );
define( 'SECURE_AUTH_KEY',   'Ik^pc`+(;@&+mpr<)5rGu0P-RTrMKML/H~{ne-b&0#Mz0>HBf x?EDETRq_rr(B+' );
define( 'LOGGED_IN_KEY',     'yi(QXBL`lhI1{YsIi:pv^#r ,ZE,e{v/Y/{b,yta8oaGP&<R8cVP %DHD/b4ijK:' );
define( 'NONCE_KEY',         'glSz8*P&EYFA~{C-NcXWxo58I|a<GSCyVt{P-j+p6U8Bb <YiwL)vd:  rW,>cc:' );
define( 'AUTH_SALT',         'y5TW{h}`%y4&Iu$X43{Xu6T0bN[9U)}UW{yB[$*|5soKT! hCyzUmlu_}_UwXm-l' );
define( 'SECURE_AUTH_SALT',  '5?I~.FnBsK^G$eCM,+J-Gm%QymB@=Nm;*/CU$=Ub?VrD,eLUNhdPQ-t2w#{G%MwC' );
define( 'LOGGED_IN_SALT',    '%_U.pzx=`ZNq*kYb9fPGCYjG*c(-_Nz`WPQijYSB4jbaP|ouq{0!2Wh3kHLq&y-/' );
define( 'NONCE_SALT',        'Q[<q0-x3=q/%86r8gBtAXr$6gvs=T0skFKEv^Z%#NF#N&;Zh&!bql@tY}@3;p$yR' );
define( 'WP_CACHE_KEY_SALT', 'S$ODCqFT 6_0Z/LNL3SsH [{Yhfv7_)Otzko[07q1]{Y~A:^0_8; c4y>w&!]KC~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
