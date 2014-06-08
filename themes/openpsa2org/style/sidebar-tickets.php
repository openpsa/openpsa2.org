<?php
$rss = net_nemein_rss_fetch::raw_fetch('http://trac.openpsa2.org/query?status=new&status=assigned&status=reopened&format=rss&order=priority');

echo '<h3><a href="http://trac.openpsa2.org/query?status=new&status=assigned&status=reopened&group=type&order=priority">Open tickets</a></h3>';
echo "<ul class='tickets'>\n";

foreach ($rss->get_items() as $i)
{
    echo "<li>\n";
    $text = $i->get_title();
    if (strlen($text) > 73)
    {
        $text = substr($text, 0, 70) . '...';
    }
    echo '<a href="' . $i->get_link() . '">' . $text . "</a><br />";
    echo "</li>\n";
}
echo "</ul>\n";
?>
<script type="text/javascript" src="http://www.ohloh.net/p/486313/widgets/project_partner_badge.js"></script>