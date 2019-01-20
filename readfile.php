<?php
$dir = "uploads/";
$arr = [];
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if ($file === '.' || $file === '..') continue;
        array_push($arr,['name'=>$file, 'url'=>$dir.$file]);
    }
    closedir($dh);
    echo json_encode($arr);
  }
}
?>
