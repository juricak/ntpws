<?php




	$sql = 'SELECT name, description, picture, created_by FROM mashrooms ORDER BY created_at';
	$result = mysqli_query($conn, $sql);
	$mashrooms = mysqli_fetch_all($result, MYSQLI_ASSOC);


	mysqli_free_result($result);

	mysqli_close($conn);




	

print'	<h4 class="title">Mashrooms!</h4>

	<div>
		<div>';

			 foreach($mashrooms as $mashroom){

				print'
				<div>
					<div class="display">
                    	<img src="img/'.$mashroom['picture'].'">
						
						<h2>' .htmlspecialchars($mashroom['name']).'</h2>
						<p>' .htmlspecialchars($mashroom['description']).'</p>
                        <h6>' .htmlspecialchars($mashroom['created_by']).'</h6>
							
					</div>
				</div>';

			}

			print'
		</div>
	</div>';


	?>