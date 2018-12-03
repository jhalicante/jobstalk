<?php
	define('SITE_NAME', 'JobsTalk');
	define('GEN_UID', date('mdY').''.time());
	define('ASSET_URL', 'http://localhost:8888/jobstalk/');
	

	// Database Variables
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', 'root');
	define('DATABASE', 'jobstalk_db');

	// Create connection
	$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
	// Check connection
	if ($conn->connect_error) {
		die("Database Connection failed: ");
	} 

	// echo GEN_UID;	
?>