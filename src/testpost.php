<?php

$post_data = 'ON';
$content_length = strlen($post_data);

header('POST /test_py.php HTTP/1.1');
header('Host: 192.168.1.113');
header('Connection: close');
header('Content-type: application/x-www-form-urlencoded');
header('Content-length: ' . $content_length);
header('');
header($post_data);

echo "This is some text from the external PHP file - ON Handeler.";
exit();
?>