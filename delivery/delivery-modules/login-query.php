<?php

$error = "";

if (isset($_POST['deli-login'])) {

	$deliPhone = $_POST['deli-phone'] ? addslashes($_POST['deli-phone']) : exit('Invalid phone');
	$deliPwd   = $_POST['deli-pwd'] ? addslashes($_POST['deli-pwd']) : exit('Invalid password');

	$query = "SELECT * FROM `delivery_master` WHERE `deli_phone`='$deliPhone' AND `deli_status` ='active'";
	$res   = mysqli_query($conn, $query);
	$nums  = mysqli_num_rows($res);

	if ($nums == 1) {

		$row = mysqli_fetch_object($res);

		if ($row->deli_phone == $deliPhone && password_verify($deliPwd, $row->deli_password)) {

			$_SESSION['login_status'] = true;
			$_SESSION['deli_id'] = $row->admin_id;
			$_SESSION['deli_name'] = $row->deli_name;
			$_SESSION['deli_state'] = $row->state_id;
			$_SESSION['deli_city'] = $row->city_id;

			header('location: index.php');
		} else {

			$error = "Invalid Credentials";
		}
	} else {

		$error = "Invalid Credentials!";
	}
}
