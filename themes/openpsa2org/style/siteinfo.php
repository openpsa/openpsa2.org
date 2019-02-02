<?php
if (!midcom_connection::get_user()) {
?>
    <p class="login"><a href="<?php echo midcom_connection::get_url('self'); ?>midcom-login-">Login</a></p>
<?php
}
?>
<p>Layout Copyright &copy; 2006 <a href="http://www.ftc.fi/">Finnish Teleservice Center Ltd Oy</a> - Site Powered by <a href="http://www.midgard-project.org/">Midgard CMS</a>, hosted by <a target="_blank" href="http://www.contentcontrol-berlin.de">CONTENT CONTROL</a></p>