<?php
$this_ip = $_SERVER['REMOTE_ADDR'];
$local_domain   = '192.168';
$local_ip = '1.162.6';
$pos = strpos($this_ip, $local_domain);
$pos_public = strpos($this_ip, $local_ip);

// The !== operator can also be used.  Using != would not work as expected
// because the position of 'a' is 0. The statement (0 != false) evaluates 
// to false.
if (/**$pos !== false || **/$pos_public !== false) {
     echo $this_ip;
} else {
     echo "Not in local";
}
?>