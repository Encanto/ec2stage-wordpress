<?php
# Database Configuration
define( 'DB_NAME', 'wp_ec2stage' );
define( 'DB_USER', 'ec2stage' );
define( 'DB_PASSWORD', '8VRAVMhbIQzx0zdavwuv' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'e!iKYp[Xx0;Z<~+2CL`#Sl3d92;-|LqlnaX|yp8V^^Ozw+>sd)P[Z]|</D-&@HPD');
define('SECURE_AUTH_KEY',  'wYpriI.@RTTw0)x](67*K|WBX~7ZkFN/3yn>_*6Xyh8%+~O(h))LLKWF!]deAr%Y');
define('LOGGED_IN_KEY',    '@OD=pNCWXe_Yi$<b1T,+?GJn?@CgUF:]ZKUC71s,N8R+@7Aq)GUYR|/8nE]Yu-Vl');
define('NONCE_KEY',        'Rhr!#%CLXEy;s^|xyuMv0Kokhi]`N~D)K~^@3J2M`xd3ssJ<aY,xL3PeS||=!#$4');
define('AUTH_SALT',        'lvC!r;wxv&+Q~cN1;(-:S`]qgvpUx_Z,+<X7qDd&hO*]~Rem;):vwj)j2EJhS&oA');
define('SECURE_AUTH_SALT', 'gr*C$KYf+wm;<3QRhi2i]@e399soV{vp_6;/Q<+`8Z!aLk+|^Vd.[LlPz6D^*Ox@');
define('LOGGED_IN_SALT',   'C>*x{sjIcp&rL]=!qE-:E__|zu|k|JGfAr,~Q7|^fCJ6uThM?[0@/uguIbBss@&>');
define('NONCE_SALT',       'Mg|8o$8%Ln6-~zH}wt8-eg@YU+7Lo`J$|*Y!$cS]0;kKO-XoRSf0HxRHui_TjN;o');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'ec2stage' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '238f7480723e10d4140f742d20d2f3e741895aeb' );

define( 'WPE_CLUSTER_ID', '100275' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'ec2stage.wpengine.com', 1 => 'ec2stage.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100275', );

$wpe_special_ips=array ( 0 => '104.198.24.86', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_SITEURL', 'http://ec2stage.wpengine.com' );

define( 'WP_HOME', 'http://ec2stage.wpengine.com' );
define('WPLANG', '');

# WP Engine ID


# WP Engine Settings








define('WP_DEBUG', false);


# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');














