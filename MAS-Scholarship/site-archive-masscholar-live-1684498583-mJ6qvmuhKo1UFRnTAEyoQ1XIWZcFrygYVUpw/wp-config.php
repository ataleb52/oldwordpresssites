<?php
# Database Configuration
define( 'DB_NAME', 'wp_masscholar' );
define( 'DB_USER', 'masscholar' );
define( 'DB_PASSWORD', 'iSDkuvZTh6AlXzaR' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'Q$_!6,UXJ`*N/M2a0O48E$pjO{aJwv^)~kKPIog`{CvfUV-bIVDnq@Vn$Mv4-/wz');
define('SECURE_AUTH_KEY',  'Z(.r2QlZrbM`(^8MI-C+KS>1PU.5oVz+$&4pGYI+FuDaWl03B/G,9)E]sLCi&~ci');
define('LOGGED_IN_KEY',    '.?j0SOn%I*voqHr3C%F_T,1}1P-H|R`3Gp(-8jxz+PI{__g:%)2+.-W<Du4}Tcir');
define('NONCE_KEY',        'daEzIucIZWosgem>F-(wmd9phqS@V{D$0VE]6h+OqC-pAFrif!!/])m5{}B%2OY%');
define('AUTH_SALT',        'na72Pba/7)X>T_J]u)sv(5WnMNm<VnsYe|p7tAbSE@|"EXDGBfCHOny}w(gR?W3m');
define('SECURE_AUTH_SALT', 'M]aLS%KV8-*H7MB~UdUy4$BvRN*"2zb1tdU@k!/%9Lv%wIiqr^!w7g20FK3bs;gK');
define('LOGGED_IN_SALT',   'KUlILU3X-V>QU?|3^;3O|orlrh.XVQ}$tpIh=KqUk8m|kKM:i(j7A<vMOCW3 iPP');
define('NONCE_SALT',       'E0[Zqcx9+ Eqz.~j{"q_?s+4R*ez1N7%^oofkzxizwD?")>.Ua>{@! 8(k%s,UpF');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'masscholar' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '13c3434f3154069b7f2ba6b1b2c5ec074e37cdfd' );

define( 'WPE_FOOTER_HTML', "<a href=\"http://wpengine.com/\" target=\"_blank\">Hosted by WPEngine.com</a>" );

define( 'WPE_CLUSTER_ID', '100975' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

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

$wpe_all_domains=array ( 0 => 'masscholar.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100975', );

$wpe_special_ips=array ( 0 => '104.196.235.64', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');














