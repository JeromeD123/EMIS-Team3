<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'software2018');
	define('DB_NAME', 'EMIS');
	$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

	if($link === false){
		die("ERROR: could no connect. " . mysqli_connect_error());
	}
?>
