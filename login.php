<?php 


$username = $password = '';

if($_POST['submit'] == FALSE){

print'
<head>
	<title>login</title>
</head>


<body>
	<section class="register">
		<h4 >Log In</h4>
		<form class="reg_form" action="" method="POST">

        	<label>Username</label>
			<input class="input_field" type="text" name="username" value="'.  htmlspecialchars($username) .'" required>

        	<label>Password</label>
			<input class="input_field" type="password" name="password" required>

			<div class="button_plate">
				<input class="submit" type="submit" name="submit" value="submit">
			</div>
		</form>
	</section>
</body>';


    



}else if($_POST['submit'] == TRUE){

        $username = mysqli_real_escape_string($conn, $_POST['username']);

		$sql  = "SELECT * FROM users WHERE username='" .  $username . "'";
		$result = @mysqli_query($conn, $sql);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);

		if (password_verify($_POST['password'], $row['password'])) {

            

			#password_verify https://secure.php.net/manual/en/function.password-verify.php
			$_SESSION['user']['valid'] = 'true';
			$_SESSION['user']['id'] = $row['id'];
			$_SESSION['user']['firstname'] = $row['firstname'];
			$_SESSION['user']['lastname'] = $row['lastname'];
			$_SESSION['user']['username'] = $row['username'];
			$_SESSION['message'] = 'Hello, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '';

			$_POST['submit'] = FALSE;

			header('Location: index.php?menu=1');
		}
		

		else {
			unset($_SESSION['user']);
			$_SESSION['message'] = '<p>You entered wrong email or password!</p>';
			$_POST['submit'] = FALSE;
			
		}

		
	}

?>






