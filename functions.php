<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Include the theme framework.
require_once __DIR__ . '/vendor/hivepress/hivetheme/hivetheme.php';

/* 
Insert data into the database
*/
global $wpdb;

if (isset($_POST['submitbtn'])) {
	$data = array(
		'email' => $_POST['email'],
		'password' => $_POST['password']
	);

	$table_name = 'account';

	$result = $wpdb->insert($table_name, $data, $format=NULL);

	if ($result == 1) {
		echo "<script>alert('Account created!');</script>";
	} else {
		echo "<script>alert('Unable to create account!');</script>";
	}
}

if (isset($_POST['searchbtn'])) {
	$data = array(
		'search' => $_POST['search'],
	);

	$table_name = 'product';

	$result = $wpdb->insert($table_name, $data, $format=NULL);

	if ($result == 1) {
		echo "<script>alert('Search valid!');</script>";
	} else {
		echo "<script>alert('Search valid');</script>";
	}
}
