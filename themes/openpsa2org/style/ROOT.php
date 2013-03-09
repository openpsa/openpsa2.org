<?php
$nap = new midcom_helper_nav();

if ($nap->get_current_node() === $nap->get_root_node())
{
    $body_class = 'frontpage';
}
else
{
    $node = $nap->get_node($nap->get_current_node());
    $body_class = $node[MIDCOM_NAV_NAME];
}
$head = midcom::get('head');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><(title)> - <?php echo midcom_core_context::get()->get_key(MIDCOM_CONTEXT_PAGETITLE); ?></title>
        <(head)>
        <?php
        $head->print_head_elements();
        ?>
    </head>
    <body class="&(body_class); <?php echo midcom::get('metadata')->get_page_class(); ?>"<?php $head->print_jsonload(); ?>>
        <?php
        midcom::get('toolbars')->show();
        ?>
        <div id="container">
            <div class="corner top-left-corner">
            </div>
            <div class="corner top-right-corner">
            </div>
            <div id="branding">
                <div class="grouplogo">
                    <(grouplogo)>
                </div>
                <?php
                if (!preg_match('/\/search\//', midcom_connection::get('uri')))
                {
                    ?><(searchbox)><?php
                } ?>
            </div>
            <div id="navigation">
                <(navigation)>
            </div>
            <div id="content">
                <(body)>
            </div>
<?php
midcom::get('uimessages')->show();
?>
            <div id="siteinfo">
                <div class="siteinfo">
                    <(siteinfo)>
                </div>
            </div>
            <div class="corner bottom-left-corner">
            </div>
            <div class="corner bottom-right-corner">
            </div>
        </div>
        <br />&nbsp;<br/>
        <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FOpenPSA%2F414191282872&amp;layout=standard&amp;show_faces=true&amp;width=300&amp;action=like&amp;colorscheme=light&amp;height=80"
scrolling="no" frameborder="0" style="border:none; overflow:hidden;
width:700px; height:30px;" allowTransparency="true"></iframe>
        
        <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3631074-4");
pageTracker._trackPageview();
} catch(err) {}</script>
    </body>
</html>