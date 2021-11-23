<?php

include 'model/db.php';
include 'config/blood_groups.php';

try {
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		if (empty($_POST['name'])) throw new Exception("Please submit your name");
		if (empty($_POST['phone'])) throw new Exception("Please submit your phone number");

		if (empty($_POST['blood_group'])) throw new Exception("Please submit your blood group");


		if (!in_array($_POST['blood_group'], $blood_groups)) throw new Exception('Please submit valid blood group');

		insert_blood_group($_POST['name'], $_POST['phone'], $_POST['blood_group']);

		header('Location: /');

	}
	

} catch(Exception $e) {
	$error_msg = $e->getMessage();
}

include 'view/blood_group_register.php';

?>