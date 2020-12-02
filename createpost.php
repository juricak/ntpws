

<?php

	$name = $description = $picture = $created_by = '';
	$created_by = $_SESSION['user']['username'] ?? 'Guest';

	if($_POST['submit'] == TRUE){

        // escape sql chars
        
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $picture = $_POST['picture'];

          
        
		$sql = "INSERT INTO mashrooms (name, description, picture, created_by) VALUES('$name','$description','$picture','$created_by')";

		
		if(mysqli_query($conn, $sql)){
			$_POST['submit'] = FALSE;
			
			header('Location: index.php?menu=1');
		} else {
			echo 'query error: '. mysqli_error($conn);
			$_POST['submit'] = FALSE;
		}

	        
    } else if($_POST['submit'] == FALSE){
	
print'
	<section class="register">
		<h4 class="center">Add Mushroom</h4>
		<form class="reg_form" action="" method="POST">

			<label>Name</label>
			<input class="input_field" type="text" name="name" required>
			
			<label>Description</label>
			<input class="input_field" type="text" name="description" required>
			
			<label>Picture</label>
			<select class="input_field" name="picture" id="picture">
				<option value="">Please select</option>
				<option value="puhara.jpg">Puhara</option>
                <option value="suncanica.jpg">Sunčanica</option>
                <option value="tartufi.jpg">Tartufi</option>
                <option value="vrganj.jpg">Vrganj</option>
			</select>
			 
			<div class="button_plate">
				<input class="submit" type="submit" name="submit" value="Add">
			</div>
		</form>
	</section>';

	}
	?>

