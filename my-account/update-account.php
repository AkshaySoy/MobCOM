<?php

$activeUser = $_SESSION['user_id'];

$error = $success = "";
$firstName = $lastName = $email = $phoneNumber = "";
$address1 = $address2 = $state = $city = $pincode = "";

if (isset($_POST['updateBtn'])) {

    $firstName = isset($_POST['firstName']) ? addslashes($_POST['firstName']) : exit('Invalid first Name');
    $lastName = isset($_POST['lastName']) ? addslashes($_POST['lastName']) : exit('Invalid last Name');
    $email = addslashes($_POST['email']) ? addslashes($_POST['email']) : exit('Invalid email');
    $phoneNumber = addslashes($_POST['phoneNumber']) ? addslashes($_POST['phoneNumber']) : exit('Invalid phoneNumber');
    $address1 = addslashes($_POST['address1']) ? addslashes($_POST['address1']) : exit('Invalid address');
    $address2 = addslashes($_POST['address2']) ? addslashes($_POST['address2']) : exit('Invalid address');
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $pincode = addslashes($_POST['pincode']) ? addslashes($_POST['pincode']) : exit('Invalid pincode');

    $updateQuery = "UPDATE `user_master`
                    SET `first_name`='$firstName', `last_name`='$lastName', `user_email`='$email', `user_phone`='$phoneNumber', 
                        `user_address_1`='$address1', `user_address_2`='$address2', `state_id`='$state', `city_id`='$city', `user_pincode`='$pincode' 
                    WHERE `user_id`='$activeUser'";

    $res = mysqli_query($conn, $updateQuery);

    if (!$res) {

        $error = "Some error occurred while processing data. Please try again later." . mysqli_error($conn);

    } else {
        $success = "Account Updated Successfully ! Please Login again.";

        $firstName = $lastName = $email = $phoneNumber = "";
        $address1 = $address2 = $state = $city = $pincode = "";
    }


}

