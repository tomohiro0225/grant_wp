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
define( 'DB_NAME', 'grant_hair' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'A60qKshlPUT?p[mA`G}5>L)Y4L;3U32~<DGLAF:[(2F2jsjGMAzBX=F)c#7C=27=' );
define( 'SECURE_AUTH_KEY',  ';CZku;/mlRlK{XC{.5Um@6kurG%X6tNVpJ`({`m^ksL+[|7+H{Ym)jJ`!GRD{-lT' );
define( 'LOGGED_IN_KEY',    'f}l/z1SMW;l]^VjNP<dHA?0`v[IRz;:l,SGAI|NRjRc)YVtBB!?uH2%VHA!Sr2%q' );
define( 'NONCE_KEY',        '#<5yRIb[^o:G-1G,t8}jL=/S$3djATz8n8to7Doc#C)=Iqs@LJx@;Bl=9 B>I:EB' );
define( 'AUTH_SALT',        'UF8E.0lcv=>{7Pe3HdThzY*pFS7vrFZyg6^=w+CZb@x5o%g$=*OnWulkc$?T}ses' );
define( 'SECURE_AUTH_SALT', '8k~Ss(#($2<{*Rvr}+?dz[&:t-:-M(~}$|r4st8%cTQRF8-!nlZBf?Y3ItZ_v$8g' );
define( 'LOGGED_IN_SALT',   'JWJWP%W}4{` p@38Atrg50]rW:E.GuS#5NdLm<DwEV,K>$ID=2/&)@s(,V<n?&}1' );
define( 'NONCE_SALT',       '_y;wH4neQI<`^MX2fJ<<-9/&u@c](3XLgj^fc.]js&``:o01<<zWheJl!>EI{|+*' );

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
