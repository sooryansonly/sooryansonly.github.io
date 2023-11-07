<?php
// Get data from form
$name = $_POST['Name'];
$email= $_POST['Email'];
$message= $_POST['Message'];

$to = "sooryans@mail.com";
$subject = "This is the subject line";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n Email = "
	. $email . "\r\n Message =" . $message;

$headers = "From: gamemithra.co.in" . "\r\n" .
			// "CC: somebodyelse@example.com";
if($email != NULL) {
	mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:index.html?mailsend");
?>
