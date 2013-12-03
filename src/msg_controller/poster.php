<?php
/*****
SWing Crew 5 Studio
poster.php 
develp by Stan
project: SkyGate
purpose: POST some data to other php
changelogs:
20131004 Stan
	created
*****/

/*
$post_data = 'ON';
$content_length = strlen($post_data);

header('POST /test_py.php HTTP/1.1');
header('Host: 192.168.1.113');
header('Connection: close');
header('Content-type: application/x-www-form-urlencoded');
header('Content-length: ' . $content_length);
header('');
header($post_data);
*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://192.168.1.199/src/range.php");
//curl_setopt($ch, CURLOPT_URL, "http://192.168.1.113/act_create.php");
curl_setopt($ch, CURLOPT_POST, true); // 啟用POST
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( array( "NL_Value"=>"123","EL_Value"=>"456") )); 
curl_exec($ch); 
curl_close($ch);


//echo "This is some text from the external PHP file - ON Handeler.";
//exit();
?>