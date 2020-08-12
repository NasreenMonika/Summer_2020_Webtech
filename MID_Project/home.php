<html>
<head>
    <title></title>
</head>
<body>
WELCOME <?php
session_start();
if ($_SESSION['status']=="Ok") 
{
echo $_COOKIE['uname'];
}
?>
</body>
</html>