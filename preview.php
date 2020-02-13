<?php
$file_list = array();
$dir = 'upload/';
if (is_dir($dir)){
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){
			if($file != '' && $file != '.' && $file != '..'){
				$file_path = $dir.$file;
				if(!is_dir($file_path)){
					$size = filesize($dir.$file);
					$file_list[] = array('name'=>$file,'size'=>$size,'path'=>$file_path);
				}
			}
		}
		closedir($dh);
	}
}
echo json_encode($file_list);
exit;