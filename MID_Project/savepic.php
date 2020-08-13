<?php 
				if(isset($_POST['submit']))
				{
						$filedir="user.png";
						
						if(move_uploaded_file($_FILES['files']['tmp_name'], $filedir))
						{
						echo "Done";
						//header("location: setProfilePicture.php");
						}
						else
						{
							echo "error";
						}
				}

				
			?>