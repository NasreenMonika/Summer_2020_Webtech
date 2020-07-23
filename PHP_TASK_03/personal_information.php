<?php
$flag=true;
if(isset($_GET['Name']))
{
	if(strlen($_GET['Name'])>0)
	{
		if(str_word_count($_GET['Name'])>1)
		{
			if(($_GET['Name'][0]>='A' && $_GET['Name'][0]<='Z') || ($_GET['Name'][0]>='a' && $_GET['Name'][0]<='z'))
			{
				$i=1;
				while($i<strlen($_GET['Name']))
				{
					if($_GET['Name'][$i]<'A' && $_GET['Name'][$i]!=' ' && $_GET['Name'][$i]!='.' && $_GET['Name'][$i]!='-')
					{
						$flag=false;
						break;
					}
					elseif($_GET['Name'][$i]>'Z' && $_GET['Name'][$i]<'a') 
					{
						$flag=false;
						break;
					}
					elseif($_GET['Name'][$i]>'z')
					{
						$flag=false;
						break;
					}
					$i=$i+1;
				}
				if($flag==true)
				{
					echo $_GET['Name'];
				}
				else
				{
					echo "Invalid  Name";
				}
			}
			else
			{
				echo "Invalid  Name";
			}
		}
		else
		{
			echo "Invalid Name";
		}
	}
	else
	{
		echo "Invalid Name";
	}
}
?>
<br>
<?php
if(isset($_GET['Email']))
{
	if(empty($_GET['Email']))
	{
		echo "Invalid Email";
	}
	else
	{
		echo $_GET['Email'];
	}
}
?>
<br>
<?php
if(isset($_GET['gender']))
{
	echo $_GET['gender'];
}
if(isset($_GET['submit']) && !isset($_GET['gender']))
	{
		echo "Gender Required";
	}
?>
<br>
<?php
$flag=true;

if (isset($_GET['day'])) 
{
	$date=(int)$_GET['day'];
	if ($date>0 && $date<=31) {
		echo $date;
	}
	else
	{
		$flag=false;
	}
}

if (isset($_GET['month'])) 
{
	$month=(int)$_GET['month'];
	if ($month>0 && $month<=12) 
	{
		echo $month;
	}
	else
	{
		$flag=false;
	}
}
if (isset($_GET['year']))
{
	$year=(int)$_GET['year'];
	if ($year>=1900 && $year<=2016) {
		echo $year;
	}
	else
	{
		$flag=false;
	}
}
if ($flag==false)
{
	echo "invalid Date of Birth";
}

?>
<br>
<?php

if (isset($_GET['bg']))
{
	echo $_GET['bg'];
}
else
{
	if(isset($_GET['submit']))
	{
		echo "PLEASE SELECT Blood Group";
	}
}
?>
<br>
<?php
if (isset($_GET['SSC']) || isset($_GET['HSC']) || isset($_GET['BSc']) || isset($_GET['MSc'])) 
{
	if (!empty($_GET['SSC'])) 
	{
		echo $_GET['SSC'];
	}
	if (!empty($_GET['HSC'])) 
	{
		echo $_GET['HSC'];
	}
	if(!empty($_GET['BSc'])) 
	{
		echo $_GET['BSc'];
	}
	if(!empty($_GET['MSc'])) 
	{
		echo $_GET['MSc'];
	}
}
else
{
	if (isset($_GET['submit']))
	{
		echo "Please select a degree";
	}
}

?>
<br>
<?php
if (isset($_GET['picture']))
{
	if (empty($_GET['picture']))
	{
		echo "Please select a picture";
	}
}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form>
			<table border="1" width="600px"height="500px">
				<tr>
					<td colspan="3" align="center" height="20%"><h1>PERSON PROFILE</h1></td>
				</tr>
				<tr>
					<td width="20%">Name
					</td>
					<td><input type="text" name="Name" size="50px"> 
					</td>
					<td width="5%">
					</td>
				</tr>
				<tr>
					<td >Email
					</td>
					<td><input type="Email" name="Email" size="50px">
					</td>
					<td >
					</td>
				</tr>
				<tr>
					<td >Gender
					</td>
					<td>
						<input type="radio" name="gender" value="Male" >  Male 
				        <input type="radio" name="gender" value="Female" > Female
				        <input type="radio" name="gender" value="Other" > Other 
					</td>
					<td >
					</td>
				</tr>
				<tr>
					<td>Date of Birth
					</td>
					<td><input type="text"name="day"size="10">/<input type="text"name="month"size="10">/<input type="text"name="year"size="15"><i>(dd/mm/yyyy)</i>
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Blood Group
					</td>
					<td>
						<select name="bg">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
			   			 </select>
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Degree
					</td>
					<td>
						<input type="checkbox" name="SSC"value="SSC">SSC
						<input type="checkbox" name="HSC"value="HSC">HSC
						<input type="checkbox" name="BSc"value="BSc.">BSc.
						<input type="checkbox" name="MSc" value="MSc.">MSc.
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Photo
					</td>
					<td colspan="2"> <input type="file" name="picture"> 
					</td>
				</tr>
				<tr>
					<td colspan="3" height=10%>
					</td>
					
				</tr>
				<tr>
					<td colspan="3"align="right">
						<input type="submit" name="submit" value="Submit"> 
			    		<input type="reset" name="" value="Clear"> 
			   		</td>

				</tr>
			</table>
		</form>
	</body>
</html>