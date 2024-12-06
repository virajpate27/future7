<?php
//get data from form  

$name = $_POST['name'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "futureinfo7@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: futureinfo7@gmail.com" . "\r\n" .
"CC: info@balajiastroguru.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>