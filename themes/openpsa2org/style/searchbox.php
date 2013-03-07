<div id="searchbox">
<form action="/search/result/" method="get">
    <input type="text" value="Search" name="query" id="midcom_helper_search_query"/>
    <input type="hidden" value="basic" name="type"/>
    <input type="hidden" value="1" name="page"/>
</form>
</div>

<script type="text/javascript">
jQuery('#midcom_helper_search_query').bind('focus', function(){
    jQuery('#midcom_helper_search_query').addClass('focused');
    if (!jQuery('#midcom_helper_search_query').attr('defaultstring'))
    {
        jQuery('#midcom_helper_search_query').attr('defaultstring', jQuery('#midcom_helper_search_query').val());
    }
    if (jQuery('#midcom_helper_search_query').attr('defaultstring') == jQuery('#midcom_helper_search_query').val())
    {
        jQuery('#midcom_helper_search_query').val('');
    }
});
jQuery('#midcom_helper_search_query').bind('blur', function(){
    jQuery('#midcom_helper_search_query').removeClass('focused');
    if (!jQuery('#midcom_helper_search_query').val() && jQuery('#midcom_helper_search_query').attr('defaultstring'))
    {
        jQuery('#midcom_helper_search_query').val(jQuery('#midcom_helper_search_query').attr('defaultstring'));
    }
});
</script>