<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['email'];

$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mail_result = mail('mykyta.prus@gmail.com', $name, $message, $headers);

if($mail_result)
{
    echo "Email Sent Successfully";
}
else

{
    echo "Mail Failed";
}
header('Location: contact.html');
exit();

