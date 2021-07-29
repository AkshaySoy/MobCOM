<?php

$error = $success = "";
$enterOTP = "";

if (isset($_POST['otpBtn'])) {

    $enterOTP = addslashes($_POST['enterOTP']) ? addslashes($_POST['enterOTP']) : exit('Invalid OTP');

    $chk_query = "SELECT `order_otp` FROM `order_master` WHERE `order_otp`= $enterOTP";
    $chk_res = mysqli_query($conn, $chk_query);

    if (mysqli_num_rows($chk_res) > 0) {
        $error = "OTP does not match !";
        echo "<script>alert('$error')</script>";
    }

    if (!empty($error)) {

        $query = "UPDATE `order_master`
                   SET `order_status`='Delivered', `track_status`='Delivered'
                   WHERE `user_id`='$userId'";
        $res = mysqli_query($conn, $query);

        if (!$res) {
            $error = "Some error occurred while processing data. Please try again later." . mysqli_error($conn);
            echo "<script>alert('$error')</script>";
        } else {
            $success = "OTP Correct ! Deliver Product.";
            echo "<script>alert('$success')</script>";

            require_once('send-order-email.php');

            $error = $success = "";
            $enterOTP = "";

        }

    }

}
