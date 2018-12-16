<?php

	// // MAC SETUP
	// define('SITE_NAME', 'JobsTalk');
	// // define('SITE_NAME', '--');
	// define('GEN_UID', date('mdY').''.time());
	// define('ASSET_URL', 'http://localhost:8888/jobstalk/'); // FOR IMAGES,CSS,JS URL : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
	// define('API_URL', 'http://localhost:8888/jobstalk/api/v1'); // FOR API URL AJAX REQUEST :  Change the value to http://localhost/jobstalk/ if you are using a windows xamp
	// define('SITE_URL', 'http://localhost:8888/jobstalk/');  // FOR REDIRECTION BACK TO HOMEPAGE : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
	// define('API_VERSION', '/v1');

	// // Database Variables
	// define('SERVERNAME', 'localhost');
	// define('USERNAME', 'root');
	// define('PASSWORD', 'root');
	// define('DATABASE', 'jobstalk_db');

	// // Create connection
	// $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
	
	// // Check connection
	// if ($conn->connect_error)
	// {
	// 	die("Database Connection failed: "); // Die the whole page when the connection goes failed
	// }


	// WINDOES SETUP
	define('SITE_NAME', 'JobsTalk');
	define('GEN_UID', date('mdY').''.time());
	define('ASSET_URL', 'http://localhost/jobstalk/'); // FOR IMAGES,CSS,JS URL : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
	define('API_URL', 'http://localhost/jobstalk/api/v1'); // FOR API URL AJAX REQUEST :  Change the value to http://localhost/jobstalk/ if you are using a windows xamp
	define('SITE_URL', 'http://localhost/jobstalk/');  // FOR REDIRECTION BACK TO HOMEPAGE : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
	define('API_VERSION', '/v1');

	// Database Variables
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'jobstalk_db');

	// Create connection
	$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
	
	// Check connection
	if ($conn->connect_error)
	{
		die("Database Connection failed: "); // Die the whole page when the connection goes failed
	}
?>