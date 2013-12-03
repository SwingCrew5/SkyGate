<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phone-number'];
$month=$_POST['month'];
$gender=$_POST['gender'];

$to = "dadastan@gmail.com";
$subject = "Feed back from SkyGate";
$message = "Here's the user feed back! \n\n"."name: ".$name."\n"."email: ".$email."\n"."phonenumber: ".$phonenumber."\n"."birthmonth: ".$month."\n"."gender: ".$gender;
$from = "msg@swingcrew5.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
 
?>