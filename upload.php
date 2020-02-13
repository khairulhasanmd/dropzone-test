<?php
$target_dir = "upload/";

$target_file = $target_dir . basename($_FILES["file"]["name"]);
$msg = ""; 
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
	$msg = "Successfully uploaded"; 
}else{    
	$msg = "Error while uploading"; 
} 
echo $msg;
exit;
?>