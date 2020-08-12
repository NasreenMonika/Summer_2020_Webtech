<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['email']))
	{
		
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'deliverymanagementsystem');
	$sql = "select * from user where email= '".$_POST['email']."'" ;
	echo $sql;
	$result = $conn->query($sql);
	$userInfo 	= mysqli_fetch_assoc($result);
	var_dump($userInfo );
	var_dump($result);
		if(!empty($userInfo))
			{
				setcookie('uname', $userInfo ['username'], time()+3600, '/');
				header('location: resetPassword.html');
			}

		else	
		{
			echo "Email is not correct";
		}
	}
	else
	{
		echo "Please enter your email" ;
	}
}
?>