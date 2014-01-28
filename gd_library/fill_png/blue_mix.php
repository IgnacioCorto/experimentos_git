<?php
$dest = imagecreatefrompng('blue.png');
imagealphablending($dest, true);
imagesavealpha($dest, true);

$src = imagecreatefrompng('logo-news.png');
imagealphablending($src, true);
imagesavealpha($src, true);

imagecopy($dest, $src, 10, 9, 0, 0, 181, 180); //have to play with these numbers for it to work for you, etc.

header('Content-Type: image/png');
imagepng($dest);
//imagepng($src);


imagedestroy($dest);
imagedestroy($src);