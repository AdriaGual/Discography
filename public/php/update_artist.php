<?php 
	session_start();
	$name = $_POST['fname'];
	$description = $_POST['dname'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	//$id_artist = $_SESSION['id_artist'];
	$dbname = "discography";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql ='UPDATE artist SET name="'.$name.'", description="'.$description.'" WHERE id_artist = "'.$id_artist.'"';
	$result = mysqli_query($conn, $sql);
	header("Location: {$_SERVER['HTTP_REFERER']}");
?>