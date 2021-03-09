<?php

require_once('header.php');

$error = "";

if (isset($_POST['userObj'])) {

	$userObj = $_POST['userObj'];
	$userObj = json_decode(stripslashes($userObj));

	$userEmail = addslashes(htmlspecialchars(strip_tags($userEmail->userEmail)));
	$userPwd   = addslashes(htmlspecialchars(strip_tags($userPwd->userPwd)));

	$query = "SELECT * FROM `user_master` WHERE `user_email`='$userEmail'";
	$res   = mysqli_query($conn, $query);
	$nums  = mysqli_num_rows($res);

	if ($nums == 1) {
		$row = mysqli_fetch_object($res);

		if ($row->user_email == $userEmail && password_verify($userPwd, $row->user_pwd)) {
			$_SESSION['login_status'] = true;
			$_SESSION['user_id'] = $row->user_id;
			$_SESSION['first_name'] = $row->first_name;
			$_SESSION['last_name'] = $row->last_name;
		} else {
			$error = "Invalid Credentials!";
		}
	} else {
		$error = "Invalid Credentials!";
	}
} else {
	$error = "Invalid Request Type!";
}
