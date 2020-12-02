<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'test', 'test1234', 'webprog');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>