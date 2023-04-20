<?php
date_default_timezone_set('UTC');
$basedir = dirname(__DIR__) . '/';
require $basedir . 'vendor/autoload.php';

midcom_connection::setup($basedir);

header('Content-Type: text/html; charset=utf-8');

$GLOBALS['midcom_config_local'] = [
    'person_class' => 'openpsa_person',
    'auth_type' => 'Legacy',
    'midcom_config_basedir' => $basedir . 'config',
    'log_filename' => $basedir . 'var/log/midcom.log',
    'midcom_services_rcs_root' => $basedir . 'var/rcs',
    'midcom_components' => [
        'fi.protie.navigation' => $basedir . 'vendor/openpsa/fi-protie-navigation/lib/fi/protie/navigation',
        'midcom.helper.search' => $basedir . 'vendor/openpsa/midcom-helper-search/lib/midcom/helper/search',
        'net.nehmer.static' => $basedir . 'vendor/openpsa/net-nehmer-static/lib/net/nehmer/static',
        'net.nehmer.blog' => $basedir . 'vendor/openpsa/net-nehmer-blog/lib/net/nehmer/blog',
        'net.nehmer.comments' => $basedir . 'vendor/openpsa/net-nehmer-comments/lib/net/nehmer/comments',
        'net.nemein.tag' => $basedir . 'vendor/openpsa/net-nemein-tag/lib/net/nemein/tag',
        'net.nemein.rss' => $basedir . 'vendor/openpsa/net-nemein-rss/lib/net/nemein/rss',
        'net.nemein.redirector' => $basedir . 'vendor/openpsa/net-nemein-redirector/lib/net/nemein/redirector',
        'org.openpsa.slideshow' => $basedir . 'vendor/openpsa/org-openpsa-slideshow/lib/org/openpsa/slideshow',
    ]
];

require $basedir . 'config.inc.php';
$GLOBALS['midcom_config_local']['theme'] = 'openpsa2org';

setlocale(LC_ALL, 'en_US.UTF-8');

// Start request processing
$midcom = midcom::get();
$midcom->i18n->set_language('en');
$midcom->codeinit();
