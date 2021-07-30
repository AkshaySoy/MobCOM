<?php

session_start();
require_once('../../modules/config.php');

if (isset($_POST['deliveryObj'])) {

    $deliveryObj = $_POST['deliveryObj'];
    $deliveryObj = json_decode(stripslashes($deliveryObj));

    $deliId = addslashes(htmlspecialchars(strip_tags($deliveryObj->deliId)));
    $deliName = addslashes(htmlspecialchars(strip_tags($deliveryObj->deliName)));
    $deliPhone = addslashes(htmlspecialchars(strip_tags($deliveryObj->deliPhone)));
    $deliStatus = addslashes(htmlspecialchars(strip_tags($deliveryObj->deliStatus)));

    $query = "UPDATE `delivery_master`
              SET `deli_name`='$deliName', `deli_phone`='$deliPhone', `deli_status`='$deliStatus'
              WHERE `deli_id` = '$deliId'";
 	if (mysqli_query($conn, $query)) {
		exit('success');
	} else {
		exit('error: Mysql Query Failed!'. mysqli_error($conn));
	}

} else {
	exit('error: Invalid request!');
}
