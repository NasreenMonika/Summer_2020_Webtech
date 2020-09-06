<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['username'])) {
		$user = getByIDBlog($_GET['username'],$_GET['id']);	
	}else{
		header('location: all_users.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td id="username"><?=$user['username']?></td>
					<td ></td>
					<td id="usernamemsg"></td>
				</tr>
				<tr>
					<td>Blog Id</td>
					<td><input type="text" id="password" name="password" value="<?=$user['blogId']?>"></td>
				</tr>
				<tr>
					<td>Body</td>
					<td><input type="text" id="contact" name="contact" value="<?=$user['blogbody']?>"></td>
					<td id="contactmsg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="f1()">
						<td><a href="../views/adminhome.php">Back</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		function f1() {
			
			var name=document.getElementById('name').value;
			var email=document.getElementById('contact').value;
			var password=document.getElementById('password').value;
			var username=document.getElementById('username').innerHTML;

			
			if(name!="" && email!="" && password!="" && document.getElementById('contactmsg').innerHTML=="")
			{
				//alert("works");
				var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/editCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name+'&'+'password='+password+'&'+'email='+email+'&'+'username='+username);
			alert('name='+name+'&'+'password='+password+'&'+'email='+email+'&'+'username='+username);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('contactmsg').innerHTML = this.responseText;
				}else{
					document.getElementById('contactmsg').innerHTML = "";
				}
				
			}	
			}
			}
		}
	</script>
</body>
</html>