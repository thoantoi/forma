<?php
$content = file_get_contents('index.php');
echo str_replace("<?php", "replaced", $content);
echo file_get_contents('index.php');
?>
