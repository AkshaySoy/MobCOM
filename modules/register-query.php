<?php

date_default_timezone_set('Asia/Kolkata');

$error = $success = "";
$firstName = $lastName = $email = $phoneNumber = $gender = "";
$address1 = $address2 = $state = $city = $pincode = $passwowrd = "";

if (isset($_POST['SubmitBtn'])) {

    $firstName = isset($_POST['firstName']) ? addslashes($_POST['firstName']) : exit('Invalid first Name');
    $lastName = isset($_POST['lastName']) ? addslashes($_POST['lastName']) : exit('Invalid last Name');
    $email = addslashes($_POST['email']) ? addslashes($_POST['email']) : exit('Invalid email');
    $gender = addslashes($_POST['gender']);
    $phoneNumber = addslashes($_POST['phoneNumber']) ? addslashes($_POST['phoneNumber']) : exit('Invalid phoneNumber');
    $address1 = addslashes($_POST['address1']) ? addslashes($_POST['address1']) : exit('Invalid address');
    $address2 = addslashes($_POST['address2']) ? addslashes($_POST['address2']) : exit('Invalid address');
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $pincode = addslashes($_POST['pincode']) ? addslashes($_POST['pincode']) : exit('Invalid pincode');
    $password = addslashes($_POST['password']);
    $dateAdded = date('y-m-d H:i:s', time());

    $password = password_hash($password, PASSWORD_DEFAULT);

    $chk_query = "SELECT `first_name` FROM `user_master` WHERE `user_email` = '$email'";
    $chk_res = mysqli_query($conn, $chk_query);

    if (mysqli_num_rows($chk_res) > 0) {
        $error = "A user is already registerred with the same email id.";
    }

    if (empty($error)) {

        $query = "INSERT INTO `user_master` (`user_id`, `first_name`, `last_name`, `user_email`, `user_phone`, `user_gender`, `user_address_1`, `user_address_2`, `state_id`, `city_id`, `user_pincode`, `user_pwd`, `user_date_added`, `user_status`) 
                  VALUES (NULL, '$firstName', '$lastName', '$email', '$phoneNumber', '$gender', '$address1', '$address2', '$state', '$city', '$pincode', '$password', '$dateAdded', 'inactive')";
        $res = mysqli_query($conn, $query);

        if (!$res) {
            $error = "Some error occurred while processing data. Please try again later." . mysqli_error($conn);
        } else {
            $success = "Registration Successfull ! Please check your email ID for verification.";

            // User email goes to verify-email.php

            require('modules/verify-email.php');

            $firstName = $lastName = $email = $phoneNumber = $gender = "";
            $address1 = $address2 = $state = $city = $pincode = $passwowrd = "";
        }

    }
}
