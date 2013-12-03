<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://192.168.1.113/test_py.php");
//curl_setopt($ch, CURLOPT_URL, "http://192.168.1.113/act_create.php");
curl_setopt($ch, CURLOPT_POST, true); // 啟用POST
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( array( "led"=>"OFF") )); 
curl_exec($ch); 
curl_close($ch);

//echo "This is some text from the external PHP file - OFF Handeler.";
//exit();
?>