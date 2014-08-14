<?php
$debug = 0;

// For debugging
if($debug == 1){
	$_POST["ldap"] = "praveendath92";
	$_POST["code"] = "DEBUGGING";
}

$from_name = "IITB Lit Verification";
$from_email = "iitblit@praveenkumar.co.in";
$to_email = $_POST["ldap"]."@iitb.ac.in";
$message = "Hello !\nYour verification code is: ".$_POST['code'];
$subject = "IITB Lit verification";
$header = "From: ". $from_name . " <" . $from_email . ">\r\n";

ini_set('sendmail_from', 'praveen@praveenkumar.co.in');

if(mail($to_email, $subject, $message, $header))
 echo "success";
?>
