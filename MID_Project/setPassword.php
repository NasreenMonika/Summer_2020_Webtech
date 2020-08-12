<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['Password']) && !empty($_POST['newPassword']))
	{
		
		if($_POST['Password']==$_POST['newPassword'])
		{
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'deliverymanagementsystem');
	   		$sql ="UPDATE user SET password='".$_POST['Password']."' WHERE username= '".$_COOKIE['uname']."'";
	   		$result = mysqli_query($conn,$sql);
	    	$sql2= "select * from user where username='".$_COOKIE['uname']."'&& password ='".$_POST['Password']."'";
	    	$result = mysqli_query($conn,$sql2);
			$resultData = mysqli_fetch_assoc($result);
			if (!empty($resultData)) 
				{
					header('location: login.html');
			
				}
		mysqli_close($conn);

		}
	}
}

?>