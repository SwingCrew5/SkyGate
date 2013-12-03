<?php 
$name=$_POST['who_select'];
$who=$_POST['who'];

$to = "dadastan@gmail.com,wiserkuo@gmail.com";
$subject = "Feed back from SkyGate";
$message = "Here's some one pressed the bell & assign there info.\n 有人按了電鈴！並且提交身份。 \n\n"."name: ".$name."\n"."who: ".$who;
$from = "msg@swingcrew5.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
 
?>