<?php
date_default_timezone_set('UTC');
$basedir = dirname(__DIR__) . '/';
require $basedir . 'vendor/autoload.php';

define('OPENPSA2_THEME_ROOT', $basedir . 'themes/');
define('MIDCOM_ROOT', $basedir . 'vendor/openpsa/midcom/lib');
define('OPENPSA2_PREFIX', '/');

header('Content-Type: text/html; charset=utf-8');

$GLOBALS['midcom_config_local'] = array();
if (extension_loaded('midgard2'))
{
    $GLOBALS['midcom_config_local']['person_class'] = 'openpsa_person';
    $GLOBALS['midcom_config_local']['auth_type'] = 'Legacy';
}
$GLOBALS['midcom_config_local']['midcom_config_basedir'] = $basedir . 'config';
$GLOBALS['midcom_config_local']['log_filename'] = $basedir . 'var/log/midcom.log';
$GLOBALS['midcom_config_local']['cache_base_directory'] = $basedir . "var/cache/midcom/";
$GLOBALS['midcom_config_local']['midcom_services_rcs_root'] = $basedir . "var/rcs";

if (!file_exists($basedir . 'config.inc.php'))
{
    die('config missing');
}

include $basedir . 'config.inc.php';
$GLOBALS['midcom_config_local']['theme'] = 'openpsa2org';

// Include the MidCOM environment
require MIDCOM_ROOT . '/midcom.php';

midcom::get('i18n')->set_language('en');
setlocale(LC_ALL, 'en_US.UTF-8');

// Start request processing
$midcom = midcom::get();
$midcom->codeinit();
$midcom->content();
$midcom->finish();
?>