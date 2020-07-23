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
					echo "Invalid";
				}
			}
			else
			{
				echo "Invalid";
			}
		}
		else
		{
			echo "Invalid";
		}
	}
	else
	{
		echo "Invalid Format";
	}
}

?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<form method="get">
		Name<br>
		<input type="text" name="Name"><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>