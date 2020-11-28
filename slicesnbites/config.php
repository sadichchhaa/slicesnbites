<!-- Database connection file -->
<!-- localhost/slicesnbites/config.php -->
<!-- DATABASE NAME=slicesnbites -->
<?php
	$conn = new mysqli("localhost","root","","slicesnbites");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>