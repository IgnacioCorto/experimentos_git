<?php

if( isset($_REQUEST['public']) ){

    die($_SERVER['REMOTE_ADDR']);

} elseif( isset($_REQUEST['local']) and isset($_REQUEST['remote']) ){

	$time = gmdate('Y-m-d H:i:s', time()-14400);
	$local_ip = trim($_REQUEST['local']);
	$remote_ip = trim($_REQUEST['remote']);
	
	$pattern='@^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$@';
	
	preg_match($pattern, $local_ip, $matches);
	$local_ip = isset($matches[0]) ? $matches[0] : '' ;
	
	preg_match($pattern, $remote_ip, $matches);
	$remote_ip = isset($matches[0]) ? $matches[0] : '' ;
	
	
	$data = serialize(array('time'=>$time,
	        'local_ip'=>$local_ip,
	        'remote_ip'=>$remote_ip));
	
	"\r\n"
        ."Time: {$time} <br />\r\n"
        ."Local: {$local_ip} <br />\r\n"
        ."Remote: {$remote_ip} <br />\r\n"
        ."\r\n";
	
	$handle = fopen('rbi-ip-current.txt', "w");
		fwrite($handle, $data, strlen($data));
	fclose($handle);
	
	echo "UPDATED: {$time} \r\n";
	
	#echo '<pre>',var_dump($_SERVER),'</pre>';


} elseif( isset($_REQUEST['last_public']) ){

    $handle = fopen('rbi-ip-current.txt', "r");
    $data = unserialize(fread($handle, 4096));
    fclose($handle);

    die($data['remote_ip']);
	
} else {

    $handle = fopen('rbi-ip-current.txt', "r");
    $data = unserialize(fread($handle, 4096));
    fclose($handle);

	echo "\r\n"
        ."Time: {$data['time']} <br />\r\n"
        ."Local: {$data['local_ip']} <br />\r\n"
        ."Remote: {$data['remote_ip']} <br />\r\n"
        ."\r\n";

    #echo '<pre>',var_dump($_SERVER),'</pre>';

}