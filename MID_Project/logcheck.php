<?php
	session_start();

	if(isset($_POST['LogIn'])){

		$username 		= $_POST['uname'];
		$password 		= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}else{
			
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'deliverymanagementsystem');
			$sql = "select * from user where username='".$username."'&& password='".$password."'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(!empty($user))
			{
				
				$_SESSION['status']  = "Ok";
				setcookie('uname',$username, time()+3600, '/');
				header('location: home.php');
			
				
			}
			else
			{
				echo "Invalid information";
			}
		}

	}else{
		header("location: login.html");
	}

?>