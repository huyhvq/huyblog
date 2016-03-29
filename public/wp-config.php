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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T)}Hh_S>I+C&#@]i1n}7%7x[EZ!~r9Pf@813mw/:>/`WR[rOkh}U8(KCY^%zSIf+');
define('SECURE_AUTH_KEY',  'ze{7*_%uuzE5/|n9r-l1O;~lr(-p~ gbFf4P}?!Mo{-=VR%JZA]6LPG_zP[&;j!A');
define('LOGGED_IN_KEY',    '_?`B*>Hl8g:r;]R+.M0x<OE`|$&<,-mR%4Seo+VJGam Lr]vX:$P6J^LB1!Viu5|');
define('NONCE_KEY',        ';D7Jov&[8m]_eQ(m+ l/,xaE8ypwKQ{4xY[$j|.t|f6ythS:+!:5@?O>%0,NNt5+');
define('AUTH_SALT',        '!rP3-|q0.X3F@acL7v^S=]v{/#JB7C$15m{yJ^:Ls.BuDpvCsrqXFiS_&t-4F%qO');
define('SECURE_AUTH_SALT', 'D+I-1MT,iij<tH|u+ZB?1f0l8|Q2BLmUhk$C/N*kZCo`R`=4qTMYBT w[o&:I;wh');
define('LOGGED_IN_SALT',   '^5|}/QO{X;Hk`#V}rgYK|AcM_qNsx^(lJ(&k*+Y9r)2]I}{X`O`lB:C~j&7~b)Cs');
define('NONCE_SALT',       'a6|PmaZm-7zC_D{ln]SnA_V7ht<l|ffV&qe:%_D`KC`*Szt2ktXl%+8yEkR~+%;!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lw_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
