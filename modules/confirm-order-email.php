<?php
$subject = 'Confirm Order';
$from = 'mobcom.admn@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1>Welcome to MobCOM !</h1>';
$message .= '<p>Thank you for registering with us ! Please click the link below to activate your account.</p>';
$message .= '<a href="http://localhost/MobCOM/account-activated.php?user_email='.$email.'">Activate your account.</a>';
$message .= '</body></html>';
 
// Sending email
mail($email, $subject, $message, $headers);
?>
