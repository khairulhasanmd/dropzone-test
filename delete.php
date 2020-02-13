<?php
$target_dir = "upload/";
$filename = $target_dir.$_POST['name'];  
unlink($filename); 
exit;
?>