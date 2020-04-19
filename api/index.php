<?php

$img_array = glob('pic/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
if(count($img_array) == 0) die('No picture file found. Please upload some pictures to server.');

header('Content-Type: image/png');
header('Content-Type: image/jpg');
header('Content-Type: image/jpeg');
header('Content-Type: image/gif');
header('Content-Type: image/bmp');
header('Content-Type: image/webp');

echo(file_get_contents($img_array[array_rand($img_array)]));

/*
dirname(__FILE__).'\pic'
*/


?>
