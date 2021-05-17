<?php   

$name = $_POST['name'];

$visitors_email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$email_from= 'yaminisharma2702@gmail.com';

$email_subject= 'New Form Submission';

$email_body= "User Name:" $name .\n.
             "User Email:" $visitors_email .\n.
             "Subject:" $subject.\n.
             "User Message:" $message.\n;

$to = 'yamini27022001@gmail.com';

$headers = "From: $email_from \r\n";

$headers . = "Reply_to: $visitors_email \r\n ";
 

mail($to,$email_subject,$email_body,$headers);

header("Location : Contact.html");


?> 