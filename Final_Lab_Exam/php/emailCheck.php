<?php 
	session_start();
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['email'])){

		$status=checkEmail($_POST['email']);
		if($status)
		{
			echo "This username is already taken.Plese try another one";
		}		
	}

?>