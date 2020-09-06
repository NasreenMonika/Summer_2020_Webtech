<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
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
					<td>Name</td>
					<td><input type="text" id="name" name="username"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" id="contact" name="contact"></td>
					<td id="contactmgs"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" onkeyup="f2()"></td>
					<td id="usernamemgs"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="f1()">
				</tr>

			</table>
		</fieldset>
	</form>

	<script type="text/javascript">
		function f1() {
			
			var name=document.getElementById('name').value;
			var email=document.getElementById('contact').value;
			var password=document.getElementById('password').value;
			var username=document.getElementById('username').value;

			if(name!="" && email!="" && password!="" && document.getElementById('contactmgs').innerHTML=="")
			{
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/regCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name+'&'+'password='+password+'&'+'email='+email+'&'+'username='+username);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('contactmgs').innerHTML = this.responseText;
				}else{
					document.getElementById('contactmgs').innerHTML = "";
				}
				
			}	
			}
				document.getElementsByTagName('a')[0].style.display='inline';
			}
		}

		function f2()
		{
			var username = document.getElementById('username').value;
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/emailCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('email='+username);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('usernamemgs').innerHTML = this.responseText;
				}else{
					document.getElementById('usernamemgs').innerHTML = "";
				}
				
			}	
			}
		}


	</script>
</body>
</html>