<?php
/**
 * 24.
 */
include 'config/db.php';


function dbconnect() {

	global $db;

	$pdo = new PDO("mysql:host={$db['host']};dbname={$db['dbname']}", $db['user'], $db['password']);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $pdo;
}

/**
 * To insert student data into students table
 * @param 
 */
function insert_blood_group($name, $phone, $blood_group) {

	$dbconnect = dbconnect();

	$dbconnect->query("INSERT INTO students (name, phone, blood_group) VALUES('{$name}', '{$phone}', '{$blood_group}')");
}

function all_students($blood_group=None) {
	$dbconnect = dbconnect();

	if ($blood_group) {
		$q = $dbconnect->query("SELECT * FROM students WHERE blood_group = '{$blood_group}' ORDER BY id DESC");
	} else {
		$q = $dbconnect->query('SELECT * FROM students ORDER BY id DESC');
	}
	
	return $q->fetchAll();
}


function check_phone_number($phone_number) {
	$dbconnect = dbconnect();

	$q = $dbconnect->query("SELECT COUNT(*) FROM students WHERE phone = '{$phone_number}'");
	return $q->fetchColumn();
}



?>