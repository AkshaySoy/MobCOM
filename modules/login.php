<?php 
	ob_start();
	$error = "";
	if (isset($_POST['loginBtn'])) {

		$userEmail = $_POST['userEmailInput'];
		$password = $_POST['userPwdInput'];

		$query = "SELECT * FROM `user_master` WHERE `email`='$userEmail'";
		$res   = mysqli_query($conn, $query); 
		$nums  = mysqli_num_rows($res);

		if ( $nums == 1 ) {
			$row = mysqli_fetch_object($res);
			
			if ($row->user_email == $userEmail && password_verify($password, $row->user_password)) {
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
?>