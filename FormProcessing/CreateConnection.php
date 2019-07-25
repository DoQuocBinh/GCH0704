<?php 
	$servername = "localhost";
	$port = "8889";
	$username = "root";
	$password = "root";
	$dbname = "GWCourses";

	
	$conn = new mysqli($servername . ":". $port , $username, 
		$password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}	 

	echo "done";

 ?>