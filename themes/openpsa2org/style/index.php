<div class="sublogo sublogo_foto">
 <h1><?php echo $data['topic']->extra; ?></h1>
 </div>

<div id="slideshow_container">
</div>
<script type="text/javascript">
    Galleria.loadTheme(MIDCOM_STATIC_URL + '/org.openpsa.slideshow/galleria/themes/default/galleria.default.js');
</script>
<script type="text/javascript">
var slideshow_data = <?php echo json_encode($data['entries']); ?>;

$('#slideshow_container').galleria({
    dataSource: slideshow_data,
            lightbox: true,
            height: 0.5625
});
</script>

<?php midcom_show_style('nav_left'); ?>
