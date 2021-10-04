<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "aaryan.bizoara16@gmail.com";
$subject = "Contact Mail From Website";
$txt ="Name = ". $name . "\r\n  E-Mail = " . $email . "\r\n Message =" . $message;
$headers = "From: Your Site" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>