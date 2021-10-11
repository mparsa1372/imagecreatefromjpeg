<?php
 
$original_image = "img/original.jpg";
$new_image = "img/new.jpg";
 
echo "original image Filesize : " . round(filesize($original_image) / 1048576 , 2) . " MB <br>";
 
$image = imagecreatefromjpeg($original_image);
imagejpeg($image , $new_image , 30);
 
echo "new image Filesize : " . round(filesize($new_image) / 1048576 , 2) . " MB";
 
?>