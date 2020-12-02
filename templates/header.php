
<!DOCTYPE html>
<html>

<head>

  <style>
    <?php include "style.css" ?>
  </style>

  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="some description">
  <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
  <meta name="author" content="jurica@tvz.hr">
	<title>Mushrooms</title> 
</head>

<body >
  <div class= "header">
      <h4 id="site_name" href="index.php" >Mushroom site</h4>
      <div class="banner-image"></div>
	<nav> 
      <ul>
        <li><a href="index.php?menu=1">Home</a></li>
        <li><a href="index.php?menu=2">Posts</a></li>
        <li><a href="index.php?menu=3">Contact</a></li>
        <li><a href="index.php?menu=4">About</a></li>
        <?php
		    if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
		  	  print '
			    <li><a href="index.php?menu=5">Register</a></li>
			    <li><a href="index.php?menu=6">Log In</a></li>';
		    }
		    else if ($_SESSION['user']['valid'] == 'true') {
			    print '
          <li><a href="index.php?menu=7">Create Post</a></li>
          <li><a id="logout" href="index.php?menu=8">Log Out</a></li>';
      }
    ?>
        <li id="message_con"><a id="message"><?php echo htmlspecialchars($message); ?></a></li>
	
      </ul>
  </nav>
    </div>