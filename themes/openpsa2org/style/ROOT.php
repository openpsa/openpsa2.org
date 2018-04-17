<?php
$nap = new midcom_helper_nav();

if ($nap->get_current_node() === $nap->get_root_node())
{
    $body_class = 'frontpage';
}
else
{
    $node = $nap->get_node($nap->get_current_node());
    $parts = explode('/', $node[MIDCOM_NAV_RELATIVEURL]);
    $body_class = array_shift($parts);
}
$head = midcom::get('head');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
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

<script>
    var gaProperty = 'UA-3631074-4';
    var disableStr = 'ga-disable-' + gaProperty;
    if (document.cookie.indexOf(disableStr + '=true') > -1) {
        window[disableStr] = true;
    }
    function gaOptout() {
        document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
        window[disableStr] = true;
        alert('Tracking is now disabled');
    }
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-3631074-4', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send', 'pageview');
</script>

    </body>
</html>