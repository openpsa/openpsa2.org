<?php
$rss = net_nemein_rss_fetch::raw_fetch('https://github.com/flack/openpsa/commits/master.atom');

echo '<h3><a href="https://github.com/flack/openpsa/commits">Recent Changes</a></h3>';
echo "<ul class='commits'>\n";

foreach ($rss->get_items() as $i) {
    echo "<li>\n";
    $text = $i->get_title();
    if (strlen($text) > 73) {
        $text = substr($text, 0, 70) . '...';
    }
    echo '<a href="' . $i->get_link() . '"><span class="timestamp">' . $i->get_date() . '</span>' . $text . "</a><br />";
    echo "</li>\n";
}
echo "</ul>\n";
?>
<br>
<script type="text/javascript" src="https://www.ohloh.net/p/486313/widgets/project_partner_badge.js"></script>