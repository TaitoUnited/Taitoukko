<?php
$date = new DateTime();
$img_base64 = $_POST['image'];
$filename = substr(md5($date->getTimestamp() . rand(1,999999)), 0, 16);
file_put_contents("img/" . $filename . ".png", base64_decode(explode(',',$img_base64)[1]));
echo $filename;
?>