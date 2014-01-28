<?php


//header("Content-type: image/png");
//$string = $_GET['text'];
//$im     = imagecreatefrompng("images/button1.png");
//$orange = imagecolorallocate($im, 220, 210, 60);
//$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
//imagestring($im, 3, $px, 9, $string, $orange);
//imagepng($im);
//imagedestroy($im);


//header('Content-Type: image/jpg');
//
//$im = imagecreatefrompng('fondo_compartir_botella.png');
//
//$logo = imagecreatefrompng('logo_juego.png');
//$botella = imagecreatefrompng('botella_color_3.png');
//
//
//$string = 'Probando';
//$orange = imagecolorallocate($im, 220, 210, 60);
//$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
//imagestring($im, 3, $px, 9, $string, $orange);
//
//
//imagejpeg($im);
//imagedestroy($im);




// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('botella_color_3.png');
$im = imagecreatefrompng('fondo_compartir_botella.png');
$logo = imagecreatefrompng('logo_juego.png');


$cereza = imagecreatefrompng('drag_cereza.png');
$pina = imagecreatefrompng('drag_pina.png');


// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, 147, 17, 0, 0, 123, 366);
imagecopy($im, $logo, 165, 77, 0, 0, 89, 78);

imagecopy($im, $cereza, 165, 77, 0, 0, 89, 78);
imagecopy($im, $pina, 165, 77, 0, 0, 89, 78);

$font = 'Love Ya Like A Sister.ttf';
$color = imagecolorallocate($im, 0, 0, 0);
$text = 'MMMMMMM MMMMMMM MMMMMMM MMMMMMM';

$font_size = 12;
$maxwidth = 110;



$words = explode(" ",$text);
$wnum = count($words);
$line = '';
$text='';
for($i=0; $i<$wnum; $i++){
  $line .= $words[$i];
  $dimensions = imagettfbbox($font_size, 0, $font, $line);
  $lineWidth = $dimensions[2] - $dimensions[0];
  if ($lineWidth > $maxwidth) {
    $text.=($text != '' ? '|'.$words[$i].' ' : $words[$i].' ');
    $line = $words[$i].' ';
  }
  else {
    $text.=$words[$i].' ';
    $line.=' ';
  }
}

//echo $text;

foreach(explode('|',$text) as $i=>$e) {
	imagettftext($im, $font_size, 0, 155, 251+(($font_size+5)*$i), $color, $font, $e);
}



// Output and free memory

//*
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
//*/





