<div id="searchbox">
<form action="/search/result/" method="get">
    <input type="text" placeholder="Search" name="query" id="midcom_helper_search_query"/>
    <input type="hidden" value="basic" name="type"/>
    <input type="hidden" value="1" name="page"/>
</form>
</div>

<script type="text/javascript">
$('#midcom_helper_search_query').on('focus', function() {
    $(this).addClass('focused');
});
$('#midcom_helper_search_query').on('blur', function(){
    $(this).removeClass('focused');
});
</script>