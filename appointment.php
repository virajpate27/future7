<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$bod= $_POST['bod'];
$bot= $_POST['bot'];
$phone= $_POST['phone'];
$service = $_POST['service'];
$address= $_POST['address'];
$to = "viraj@thewebdecor.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Booking Of Date = " . $bod . "\r\n  Booking Of Time = " . $bot . "\r\n Service = " . $service . "\r\n Address =" . $address;
$headers = "From: futureinfo7@gmail.com" . "\r\n" .
"CC: viraj@thewebdecor.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>