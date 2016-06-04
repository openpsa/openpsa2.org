<?php
// Available request keys: article, datamanager, edit_url, delete_url, create_urls
$view = $data['view_article'];
?>

<?php
if (   array_key_exists('image', $data['datamanager']->types)
    && !empty($data['datamanager']->types['image']->attachments_info['main']))
{
    $img = $data['datamanager']->types['image']->attachments_info['main']['url'];
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