<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from    = 'contact@rohanpoudel.info.np';

$email_subject= 'New Message From Website';

$email_body= "User Name : $name .\n".
             "Email :$visitor_email .\n".
             "Subject : $subject .\n".
             "User Message : $message .\n";

$to = 'rohanpoudel545@gmail.com';

$headers = "From : $email_from \r\n";

$headers .= "Reply_To : $visitor_email \r\n";

mail ($to , $email_subject , $email_body , $headers);

header("Location : index.html");

?>


