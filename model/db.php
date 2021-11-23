<?php

include 'config/db.php';


function dbconnect() {

	global $db;

	$pdo = new PDO("mysql:host={$db['host']};dbname={$db['dbname']}", $db['user'], $db['password']);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $pdo;
}


function insert_blood_group($name, $phone, $blood_group) {

	$dbconnect = dbconnect();

	$dbconnect->query("INSERT INTO students (name, phone, blood_group) VALUES('{$name}', '{$phone}', '{$blood_group}')");
}

function all_students() {
	$dbconnect = dbconnect();
	$q = $dbconnect->query('SELECT * FROM students ORDER BY id DESC');
	return $q->fetchAll();
}




?>