<?php
$imgname = 'logo-news.png';

$img = imagecreatefrompng($imgname);

$img2 = imagecreatetruecolor(imagesx($img), imagesy($img));
$blue = imagecolorallocate($img2, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
imagefilledrectangle($img2, 0, 0, imagesx($img), imagesy($img), $blue);

imagecopy($img2, $img, 0, 0, 0, 0, imagesx($img), imagesy($img));

header('Content-Type: image/png');
imagepng($img2);

imagedestroy($img);
imagedestroy($img2);
imagedestroy($blue);
