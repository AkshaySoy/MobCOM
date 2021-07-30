<?php

$enterOTP = "";

if (isset($_POST['otpBtn'])) {

    $enterOTP = addslashes($_POST['enterOTP']) ? addslashes($_POST['enterOTP']) : exit('Invalid OTP');

    $chk_query = "SELECT `order_otp` FROM `order_master` WHERE `order_otp`= $enterOTP";
    $chk_res = mysqli_query($conn, $chk_query);

    if (mysqli_num_rows($chk_res) > 0) {

        $query = "UPDATE `order_master`
        SET `order_status`='Delivered', `track_status`='Delivered'
        WHERE `order_otp`='$enterOTP'";
        $res = mysqli_query($conn, $query);

        if ($res) {

            $sendQuery = "SELECT `user_master`.*, `order_master`.*
                          FROM `user_master`, `order_master`
                          WHERE `user_master`.`user_id`=`order_master`.`user_id`
                          AND `order_master`.`order_otp`='$enterOTP'";
            $sendRes = mysqli_query($conn, $sendQuery);

            while ($row = mysqli_fetch_object($sendRes)) {
                $userEmail = $row->user_email;
                $orderId = $row->order_id;
                require_once('send-order-email.php');
            }

            echo '<script type="text/javascript">';
            echo 'alert("OTP Correct ! Deliver Product.");';
            echo 'window.location.href = "pending-orders.php";';
            echo '</script>';

            $enterOTP = "";
        }
    } else {

        echo '<script type="text/javascript">';
        echo 'alert("OTP inorrect ! Re-enter OTP.");';
        echo 'window.location.href = "pending-orders.php";';
        echo '</script>';
    }

}
