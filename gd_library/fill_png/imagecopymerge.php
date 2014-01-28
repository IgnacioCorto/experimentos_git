<?php
//NOT WORKING WITH PNG'S ALPHA TRANSPARENCY

// Create image instances
$dest = imagecreatefromgif('logo-news.gif');
$src = imagecreatefromgif('logo-news.gif');

// Copy and merge
imagecopymerge($dest, $src, 10, 10, 0, 0, 100, 47, 75);

// Output and free from memory
header('Content-Type: image/gif');
imagegif($dest);

imagedestroy($dest);
imagedestroy($src);