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
define( 'DB_NAME', 'wordpress_cli' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passw0rd' );

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
define( 'AUTH_KEY',          '9Rb$W6y,{h#8:10i5XO63Y6Dn,F0dC5<%1BjJZv/I${YU=]]zf)xIGj*Ibq%}/cG' );
define( 'SECURE_AUTH_KEY',   'EBR9O5m!Ll<)yJJK-xydK_u$.pid;|fcwEy@=VxA1dP_;OqO/M4:{kq{2b|P^{S}' );
define( 'LOGGED_IN_KEY',     'HwJ3;xzmgR#S6hZ!W;Gcl$,sHB},<Anq.F]3@uuq-xaF9+a[t_pCWYkr$ox9bn>v' );
define( 'NONCE_KEY',         'D z*J eTu{:wsz*SKX&zv,@5,DUvp_1#2j9d`M]jr(I5j^fZq*tz[8vvKCn_!! Z' );
define( 'AUTH_SALT',         'J#7>@lT7ZXWX@(X&Kj<tBs9Pp)oNhNlp[d^{F548qeajbsdl8Y$fXo~m^eu]*3&q' );
define( 'SECURE_AUTH_SALT',  '+O^5;7n-PBm!S+3i[xshADEZ3G7s,Tdq,N(L6XMm1l~PN:X^!Kl>.t#r/}l0gPm}' );
define( 'LOGGED_IN_SALT',    'uv~Wa50]=xOcxAJ~pnwy:Z|t)R-_r[{[A`IvcT+LtNW3~wMpLB;|]l[Cj@ e*i+9' );
define( 'NONCE_SALT',        '}n#piJJunP7r4%QVSDGPV37~5{z_YLIU_?OQCfh!x%,6T70}4H)X.~vW#sFBK/gp' );
define( 'WP_CACHE_KEY_SALT', 'eOD E</wbNv3L$x$Hm`:2L:mn_-fmb1EdhkQMUbo Nkl2Q{3v>2}iH08^ihK%S$R' );

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
