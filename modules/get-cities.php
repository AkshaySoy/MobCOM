<?php
require_once('config.php');

if (isset($_POST['POST_TYPE'])) {

	$POST_TYPE = $_POST['POST_TYPE'];

	$STATE_ID = $_POST['STATE_ID'];
	$query = "SELECT * FROM `cities_master` WHERE `state_id`=$STATE_ID";
	$res = mysqli_query($conn, $query);

	echo "<option value disabled selected>Select City</option>";

	while ($row = mysqli_fetch_object($res)) {
		echo "<option value='$row->city_id'>$row->city_name</option>";
	}

} else {

	exit('Invalid POST_TYPE');

}
