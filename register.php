<?php


	$firstname = $lastname = $email = $username = $password = $country = '';
	

	if($_POST['submit'] == TRUE){

       
		
		
            // escape sql chars
            $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $country = mysqli_real_escape_string($conn, $_POST['country']);

            $sql = "SELECT * FROM users WHERE email='" .  $email . "'OR username='" .  $username . "'";
            $result = @mysqli_query($conn, $sql);
            $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
            
                if ($row['email'] == '' || $row['username'] == '') {

                    $pass_hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);


			        $sql = "INSERT INTO users (firstname, lastname, email, username, password, country) VALUES('$firstname','$lastname','$email','$username','$pass_hash','$country')";

			        
			        if(mysqli_query($conn, $sql)){
						$_POST['submit'] = FALSE;
				        header('Location: index.php?menu=1');
			        } else {
						$_POST['submit'] = FALSE;
				        echo 'query error: '. mysqli_error($conn);
			        }

	        }else {
                     echo '<p>User with this email or username already exist!</p>';
    }} 



else if($_POST['submit'] == FALSE){

	print'

	<section class="register">
		<h4 >Register</h4>
		<form class="reg_form" action="" method="POST">

			<label>First Name:</label>
			<input class="input_field" type="text" name="firstname" value="'. htmlspecialchars($firstname) . '" required>
			
			<label>Last Name:</label>
			<input class="input_field" type="text" name="lastname" value="'. htmlspecialchars($lastname) .'" required>
			
			<label>Email:</label>
			<input class="input_field" type="email" name="email" value="'. htmlspecialchars($email) .'" required>
			
            <label>Username: <small>(Username must have min 5 and max 10 char)</small></label>
			<input class="input_field" type="text" name="username" pattern=".{5,10}" value="'. htmlspecialchars($username) .'" required>

            <label>Password: <small>(Password must have min 4 char)</small></label>
			<input class="input_field" type="password" name="password" pattern=".{4,}" required>

            <label for="country">Country:</label>
			<select class="input_field" name="country" id="country">
				<option value="">Please select</option>
                '
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($conn, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			'
			</select>

			<div class="button_plate">
				<input class="submit" type="submit" name="submit" value="Register">
			</div>
		</form>
	</section>';

			}

	?>
