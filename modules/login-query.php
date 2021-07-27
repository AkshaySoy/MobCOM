<?php

$error = "";

if (isset($_POST['loginBtn'])) {

	$userEmail = $_POST['userEmail'] ? addslashes($_POST['userEmail']) : exit('Invalid email');
	$userPwd   = $_POST['userPwd'] ? addslashes($_POST['userPwd']) : exit('Invalid password');

	$query = "SELECT * FROM `user_master` WHERE `user_email`='$userEmail' AND `user_status` ='active'";
	$res   = mysqli_query($conn, $query);
	$nums  = mysqli_num_rows($res);

	if ($nums == 1) {
		
		$row = mysqli_fetch_object($res);

		if ($row->user_email == $userEmail && password_verify($userPwd, $row->user_pwd)) {

			$_SESSION['login_status'] = true;
			$_SESSION['login_message'] = true;
			$_SESSION['user_id'] = $row->user_id;
			$_SESSION['first_name'] = $row->first_name;
			$_SESSION['last_name'] = $row->last_name;
			$_SESSION['user_email'] = $row->user_email;
			$_SESSION['user_phone'] = $row->user_phone;
			$_SESSION['user_address_1'] = $row->user_address_1;
			$_SESSION['user_address_2'] = $row->user_address_2;		

			header('location: index.php');

		} else {

			$error = "Invalid credentials or Account not activated.";
			
		}
	} else {

		$error = "Invalid Credentials!";
		
	} 
}