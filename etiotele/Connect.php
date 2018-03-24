<?php
	$db = mysqli_connect("localhost", "root", "", "photos");

	if (!$db) {
		die("Database Connection Faild" .mysqli_error($db));
	}
	$select = mysqli_select_db($db, 'photos');
	if (!$select) {
		die("Database Selection Faild" .mysqli_error($db));
	}

?>