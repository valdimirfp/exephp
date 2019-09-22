<?php
ini_set('default_socket_timeout',5);
if (isset($_POST['url']))
{
$link = $_POST['url'];
echo "<h2>Displaying - $link</h2><hr>";
echo "<pre>".htmlspecialchars(file_get_contents($link))."</pre><hr>";
}
?>