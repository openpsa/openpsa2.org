<?php
$themedir = MIDCOM_STATIC_URL . '/' . midcom::get('config')->get('theme') . '/';
$head = midcom::get('head');
?>

<link type="image/x-icon" href="/midcom-static/org.openpsa.core/openpsa-16x16.png" rel="shortcut icon"/>
<?php
$head->add_stylesheet($themedir . 'style.css', 'screen');
$head->add_stylesheet($themedir . 'navigation.css', 'screen');
$head->add_stylesheet($themedir . 'content.css', 'screen');
$head->add_stylesheet($themedir . 'print.css', 'print');

$head->enable_jquery();
if (midcom_connection::get('uri') == '/')
{
    $head->add_jsfile(MIDCOM_STATIC_URL . '/org.openpsa.slideshow/galleria/galleria-1.3.5.min.js');
}
?>
<meta name="google-site-verification" content="2K1p--qZOW4lboXyYBHphQxGoyoyF9T4actNE-YQySQ" />