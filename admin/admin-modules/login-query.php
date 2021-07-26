<?php

$error = "";

if (isset($_POST['admin-login'])) {

	$adminEmail = $_POST['admin-email'] ? addslashes($_POST['admin-email']) : exit('Invalid email');
	$adminPwd   = $_POST['admin-pwd'] ? addslashes($_POST['admin-pwd']) : exit('Invalid password');

	$query = "SELECT * FROM `admin_master` WHERE `admin_email`='$adminEmail' AND `admin_status` ='active'";
	$res   = mysqli_query($conn, $query);
	$nums  = mysqli_num_rows($res);

	if ($nums == 1) {

		$row = mysqli_fetch_object($res);

		if ($row->admin_email == $adminEmail && password_verify($adminPwd, $row->admin_password)) {

			$_SESSION['login_status'] = true;
			$_SESSION['admin_id'] = $row->admin_id;
			$_SESSION['admin_name'] = $row->admin_name;

			header('location: index.php');
		} else {

			$error = "Invalid Credentials";
		}
	} else {

		$error = "Invalid Credentials!";
	}
}
