<?php

session_start();

include 'model/db.php';

if (isset($_GET['blood_group'])) {
	$students = all_students($_GET['blood_group']);
} else {
	$students = all_students();
}


include 'view/blood_group_table.php';

?>