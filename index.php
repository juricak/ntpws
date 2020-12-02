<?php

	session_start();

	include('config/db_connect.php');

	$message = $_SESSION['message'] ?? 'Guest';
	$created_by = $_SESSION['user']['username'] ?? 'Guest';

	if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	
	if(!isset($_POST['submit']))  { $_POST['submit'] = FALSE;  }
	

	include('templates/header.php'); 

	
	
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	
	else if ($menu == 2) { include("posts.php"); }
	
	
	else if ($menu == 3) { include("contact.php"); }
	
	
	else if ($menu == 4) { include("about.php"); }
	
	
	else if ($menu == 5) { include("register.php"); }
	
	
	else if ($menu == 6) { include("login.php"); }
	
	
	else if ($menu == 7) { include("createpost.php"); }
	
	
	else if ($menu == 8) { include("logout.php"); }
	
	

	 include('templates/footer.php');
	 
	 
	 ?>

