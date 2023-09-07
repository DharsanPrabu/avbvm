<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['mobile'];
$message= $_POST['message'];
$to = "santhoshomprakash05@gmail.com";
$subject = "Mail From AVBVM";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile Number =" . $mobile . "\r\n Message =" .$message;
$headers = "From: noreply@avbvm.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>