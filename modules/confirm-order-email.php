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
$message .= "<h1>Order Id: ". $order_id ."</h1>";
$message .= "<h3>OTP : $order_otp</h3>";
$message .= '<p>Thank You for using our service.</p>';
$message .= '<p>Use this OTP when the product is at your doorstep.</p>';
$message .= '</body></html>';
 
// Sending email
$email = $_SESSION['user_email'];
mail($email, $subject, $message, $headers);
?>
