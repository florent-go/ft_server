<?php

define( 'DB_NAME', 'wordpress' ); // Example MySQL database name

define( 'DB_USER', 'wordpress_user' ); // Example MySQL username

define( 'DB_PASSWORD', 'password' ); // Example MySQL password


/* Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/* The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


//This will force all users to have to log in again.
define('AUTH_KEY',         'l/y+_/;/RvTC.-qC2OP<i>9{,bKP0*1MH6#4!3|;d60+a@$1dK5&-]yRC3#4NOWe');
define('SECURE_AUTH_KEY',  '!Na0+A+XfkZs=-!PN {%^,fk/]D-n_JU9E(eN-3(p|N(^9O^fP;O2(<93[BbfW l');
define('LOGGED_IN_KEY',    '-7=<N]i^+Z2ElGK*9fN#k+AwU-8|e:Khc.~JKw-2iBZ4u)Z{bzg$b3+w`nIB$_L0');
define('NONCE_KEY',        'KXqbt(e:={,.g0d8l%2Pog$6f.p$@NPg> @!wkF-{uMHVl9[^b:emU-@?e>E-%->');
define('AUTH_SALT',        'j7O0zfDyAV.E]X9uS,Q;YvLo=zRsxp;yA:]m9mv#+_^<DJumY~o?16@U_2vx7;gW');
define('SECURE_AUTH_SALT', 'o:%izALg+w)&Y.]%VSu|qT@YvF*C}g0oCc54:B*)2(-L0|i:jNv7tkStn( ,beQ1');
define('LOGGED_IN_SALT',   'tDY^qMTlYpZH*0CD|kceNyt26Kie4+=5#R|JsEgHq{*$*S^+l:&t= :eCR_ LF^;');
define('NONCE_SALT',       'X^{JHANI[|MQ=~HV:V CXsw~@1oHXNQIay$X&-~m[{5tyN|<tZ?4>S]-;5zfyF9<');

//WordPress Database Table prefix.
$table_prefix = 'wp_';

//debug mode
define('WP_DEBUG', false);

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>