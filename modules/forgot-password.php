<?php

$resetEmail = "";

if (isset($_POST['reset-btn-link'])) {

    $resetEmail = addslashes($_POST['reset-email']) ? addslashes($_POST['reset-email']) : exit('Invalid email');

    $subject = 'Reset your password';
    $from = 'mobcom.admn@gmail.com';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Create email headers
    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<h1>Reset your password !</h1>';
    $message .= '<p>Please click the link below to reset your password.</p>';
    $message .= '<a href="http://localhost/MobCOM/reset-password.php?user_email='.$resetEmail.'">Reset Password</a>';
    $message .= '</body></html>';

    // Sending email

    if (mail($resetEmail, $subject, $message, $headers)){
        $resetLink = "An email has been sent to reset your password";
    };
}
