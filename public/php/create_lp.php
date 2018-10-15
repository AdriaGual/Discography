<?php 
	$name = $_POST['fname'];
	$description = $_POST['dname'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "discography";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql ='INSERT INTO lps (name, description) VALUES ("'.$name.'", "'.$description.'")';
	$result = mysqli_query($conn, $sql);
	header("Location: {$_SERVER['HTTP_REFERER']}");
	
?>