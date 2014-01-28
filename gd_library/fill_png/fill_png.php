<?php
///ini_set("memory_limit", '32M');
$imgname = 'logo-news.png';

/*
//create main image - transparent, with opaque red square in middle
$img = imagecreate(60, 60);
$white = imagecolorallocate($img, 255, 255, 255);
imagecolortransparent($img, $white); //make background transparent
$red = imagecolorallocate($img, 255, 0, 0);
imagefilledrectangle($img, imagesx($img) / 4, imagesy($img) / 4, imagesx($img) - (imagesx($img) / 4), imagesy($img) - (imagesy($img) / 4), $red);
*/

$img = imagecreatefrompng($imgname);
//imagealphablending($img, true);
//imagesavealpha($img, true);


//create new image, with pre-filled background, then merge first image across
//$img2 = imagecreatetruecolor(imagesx($img), imagesy($img));
//imagealphablending($img2, true);
//imagesavealpha($img2, true);
//$blue = imagecolorallocatealpha($img2, 255, 0, 255,127);


$img2 = imagecreatetruecolor(imagesx($img), imagesy($img));
imagealphablending($img2, false);
imagesavealpha($img2, true);
$blue = imagecolorallocate($img2, 0, 0, 255);
imagefilledrectangle($img2, 0, 0, imagesx($img), imagesy($img), $blue);


imagecopymerge($img2, $img, 10, 10, 0, 0, imagesx($img), imagesy($img), 100);


//output
//echo '<pre>',imagesx($img),' - ',imagesy($img),'</pre>';
header('Content-Type: image/png');
imagepng($img2);

/*
$img3 = imagecreatetruecolor(200, 200);
imagesavealpha($img3, true);
$color = imagecolorallocatealpha($img3, 0, 0, 0, 127);
imagefill($img3, 0, 0, $color);
imagepng($img3, 'test.png');
*/