<html>
<head>
    <title> HOME</title>
</head>
<body>

<fieldset>
	<center>
	 <img src="deliveryman.jpg"  width="800" height="500">
 	</center></br>
<center><b>
WELCOME <?php
session_start();
if ($_SESSION['status']=="Ok") 
{
echo $_COOKIE['uname'];
}

?>
 </center></br>
  <center>
        <a href="searchOrder.php"><u><b>AVAILABLE ORDER</a><br>
        <a href="avaibleStatus.php"><u><b>UPDATE AVAIBLE STATUS</a><br>
        <a href="searchMedicine.php"><u><b>AVAIBLE MEDICINE ORDER</a></br>
        <a href="checkReview.php"><u><b>REVIEW</a></br>
        <a href="deliveryHistory.php"><u><b>HISTORY</a></br>
        <a href="contactAdmin.php"><u><b>CONTACT ADMIN</a></br>
        <a href="totalDelivery.php"><u><b>TOTAL DELIVERY</a></br>
         <a href="logout.php"><u><b>LOG OUT</a></br>
    </center>
</fieldset>
</body>
</html>