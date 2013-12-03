<?php
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
$name=$_POST['name'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://192.168.1.113/test_py.php");
//curl_setopt($ch, CURLOPT_URL, "http://192.168.1.113/act_create.php");
curl_setopt($ch, CURLOPT_POST, true); // 啟用POST
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( array( "led"=>"ON","name"=>$name) )); 
curl_exec($ch); 
curl_close($ch);


echo "POST to pi OK";
//exit();
?>