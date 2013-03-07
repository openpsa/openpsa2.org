<?php
$node_path = fi_protie_navigation::get_node_path();
if (array_key_exists(1, $node_path))
{
    $node = $nap->get_node($node_path[1]);

    if (midcom_connection::get('uri') == '/resources/development/')
    {?>
        <(sidebar-tickets)>
    <?php }
    else if (count($nap->list_child_elements($node[MIDCOM_NAV_ID])) > 0)
    {
        echo "<h3><a href=\"{$node[MIDCOM_NAV_FULLURL]}\">{$node[MIDCOM_NAV_NAME]}</a></h3>\n";
        $navi->skip_levels = 1;
        $navi->draw();
    }
}
else if (midcom_connection::get('uri') == '/') 
{
    midcom::get()->dynamic_load('/midcom-substyle-home/news/latest/5/');
}

?>