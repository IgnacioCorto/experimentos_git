<?php
$filelist = glob('images/*');
shuffle($filelist);

echo '<p>', count($filelist), ' items in total </p>';

foreach($filelist as $e){
	$filedata = getimagesize($e);
	#echo '<pre>',var_dump($filedata),'</pre>';
	printf('w=%s ; h=%s ; name=%s ; <br />', $filedata[0], $filedata[1], $e);
}