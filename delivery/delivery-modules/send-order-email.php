<?php
$subject = 'Delivery Confirmation';
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
$message .= '<h1>Delivery Successful !</h1>';
$message .= '<p>Thank you for shopping with us ! Your order has been successfully delivered.</p>';
$message .= '</body></html>';
 
// Sending email
mail($userEmail, $subject, $message, $headers);
?>
