<?php

print'

<h1 class="title">Contact Form</h1>
		<section class="register">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7890741539636!2d15.966758816056517!3d45.795453279106205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b5d094979%3A0xda8bfa8459b67560!2sUl.+Vrbik+VIII%2C+10000%2C+Zagreb!5e0!3m2!1shr!2shr!4v1509296660756" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			<form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
				<label for="fname">First Name:</label>
				<input class="input_field" type="text" id="fname" name="firstname" required>

				<label for="lname">Last Name:</label>
				<input class="input_field" type="text" id="lname" name="lastname" required>
				
				<label for="lname">Your E-mail:</label>
				<input class="input_field" type="email" id="email" name="email" required>

				<label for="country">Country:</label>
				<select class="input_field" id="country" name="country">
				  <option value="">Please select</option>
				  <option value="BE">Belgium</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				</select>

				<label for="subject">Subject:</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <div class="button_plate">
                    <input class="submit" type="submit" value="Submit">
                </div>
			</form>
			</section>';
			
	?>
        
 