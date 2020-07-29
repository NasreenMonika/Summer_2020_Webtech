<?php
	
	if(isset($_POST['LogIn']))
	{

		$uname 		= $_POST['uname'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password)){
			echo "null submission";

		}else if( isset($_COOKIE['uname']) && isset($_COOKIE['password'])){
			
			if($uname == $_COOKIE['uname'] && $password == $_COOKIE['password']){
				setcookie('status', "OK", time()+3600, '/');
				header('location: dashboard.php');



			}else{
				echo "Invalid username/password";
			}
			
		}else{
			echo "Record not found!";
		}

	}else{
		header("location: login.html?error=test");
	}


?>
