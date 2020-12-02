<?php

	session_start();
	
	
	unset($_POST);
	unset($_SESSION['user']);

	$_SESSION['user']['valid'] = 'false';
	$_SESSION['message'] = 'You are not logged in.';
	
	header("Location: index.php");
    exit;
    ?>