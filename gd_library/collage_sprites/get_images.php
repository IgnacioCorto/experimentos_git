<?php
$pictures = array(
'https://cdn3.iconfinder.com/data/icons/UltimateGnome/128x128/stock/stock_3d-texture-and-shading.png',
'http://upload.wikimedia.org/wikipedia/commons/f/ff/Crystal_Clear_Icons_Apps_Messenger.png',
'http://icons-search.com/img/yellowicon/firefox_linux.zip/Firefox_Thunderbird_Lin-icons-Firefox_256x256.png-256x256.png',
'http://icons.iconarchive.com/icons/artua/harry-potter/256/trash-full-icon.png',
'http://icons.iconarchive.com/icons/icondesigner.net/hyperion/256/3D-Icons-icon.png',
'http://androgeek.com/wp-content/uploads/2010/03/free-large-android256.jpg',
'http://icons.iconarchive.com/icons/everaldo/crystal-clear/128/App-phppg-icon.png',
'http://www.iconshock.com/img_jpg/REALVISTA/development/jpg/128/anchor_icon.jpg',
'http://icons.iconarchive.com/icons/artua/dragon-soft/256/Printer-icon.png',
'http://img.informer.com/icons/png/48/3964/3964609.png',
'https://cdn4.iconfinder.com/data/icons/human-resources/80/Human_resource_icons-14-128.png',
'http://devfiles.myopera.com/articles/56/configure-4.png',
'https://cdn3.iconfinder.com/data/icons/flatforlinux/128/38-USB%20HD.png',
'http://icons.iconarchive.com/icons/sykonist/console/256/Nintendo-DS-icon.png',
'https://cdn3.iconfinder.com/data/icons/UltimateGnome/128x128/actions/gtk-refresh.png',
'http://www.designboom.com/wp-content/uploads/2014/01/emjoi-icons-imagined-in-real-life-by-liza-nelson-designboom-26.jpg',
'https://scaccess.communityos.org/local/os107/posting_area/images/NewIcons/Question-Block-icon.png',
'https://cdn0.iconfinder.com/data/icons/huge-business-vector-icons/60/equipment-128.png',
'http://www.iconshock.com/img_jpg/REALVISTA/accounting/jpg/128/balance_icon.jpg',
);

die(count($pictures).' items in total');

foreach($pictures as $e){
	$filedata = pathinfo($e);
	$newname = sha1($e).'.'.$filedata['extension'];
	#echo '<pre>',var_dump($filedata),'</pre>';
	echo $newname,'<br/>';
	
	file_put_contents('images/'.$newname,file_get_contents($e));
}


