<?php
$imgname = 'nine-colors.gif';

# $rgb = imagecolorat($img, $x, $y);          ## RRGGBB   ($rgb >> 16) & 0xFF;
# $colors = imagecolorsforindex($im, $rgb);   ## array('red'=>255,'green'=>255,'blue'=>255,'alpha'=>255)


$img = imagecreatefromgif($imgname);



if(isset($_GET['text'])){
	header('Content-Type: text/plain');
	
	$total_colors = imagecolorstotal($img);
	
	echo '* Total colors in image: ' , $total_colors , "\r\n";
	printf("Index of the color at (%d,%d): %d \r\n\r\n"
			,20
			,20
			,imagecolorat($img, 20, 20)
			);
	printf("Index of the 'closest' color of rgb(%d, %d,%d): %d \r\n"
			,0
			,200
			,0
			,imagecolorclosest($img, 0, 128, 0)
			);
	printf("Index of the 'exact' color of rgb(%d, %d,%d): %d \r\n"
			,0
			,200
			,0
			,imagecolorexact($img, 0, 128, 0)
			);
	echo "\r\n";
	
	
	
	
	for($i=0;$i<$total_colors;$i++){
		$rgba = imagecolorsforindex($img, $i);
		
		printf("Color #%2d: red(%3d) , green(%3d) , blue(%3d) , alpha(%3d) \r\n"
				,$i
				,$rgba['red']
				,$rgba['green']
				,$rgba['blue']
				,$rgba['alpha']);
	}
	
	
} else {	
	header('Content-Type: image/gif');
	
	$index = 0;
	imagecolorset($img, $index, 255, 0, 0);
	
	imagepng($img);
}

imagedestroy($img);
