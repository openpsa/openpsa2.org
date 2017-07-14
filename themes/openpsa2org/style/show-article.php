<?php
// Available request keys: article, datamanager, edit_url, delete_url, create_urls
$view = $data['view_article'];
?>

<?php
if (!empty($view['image']))
{
    $img = midcom_db_attachment::get_url($data['datamanager']->get_storage()['image']['main']);
    ?>
    <div class="title-image" style="background-image: url(&(img););">
        <h1>&(view['title']:h);</h1>
    </div>
    <?php
}
else
{ ?>
    <h1>&(view['title']:h);</h1>
<?php }
?>

&(view['content']:h);