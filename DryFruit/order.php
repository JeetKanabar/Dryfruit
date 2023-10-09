<html>
	<head>
	<title>Your Order</title>
	<style>
body {
  color:black;
}
</style>
	</head>
<body>
<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
		echo"<script>window.location='login.php'</script>";
	}
	else
	{	
		include("header1.php"); 
		$q1 = mysqli_query($cn,"select * from registration where name='".$_SESSION['username']."'");
		$r1 = mysqli_fetch_row($q1);
?>		

	<table style="width:50%" align=center border=3>
	<h1 align=center>🛒YOUR ORDER 🛒</h1>
	
	<tr>
		<th>Name :</td>
		<th colspan=3> <?php echo $_SESSION['username']; ?></td>
	</tr>
	
	<?php
	$q2 = mysqli_query($cn,"SELECT * FROM `order_detail` WHERE `name` LIKE '".$_SESSION['username']."'");
	
	while($r2 = mysqli_fetch_array($q2))
	{
		echo "<tr><th>Date</th><td align=center>".$r2[3]."</td></tr><tr><th>Amount</th><td align=center>".$r2[4]."</td></tr><tr><th>Bill no</th><td align=center>".$r2[1]."</td></tr>
		<td></td><td><form action='orderdetails.php' method='POST' > <input type='hidden' name='billno' value='". $r2[1]."'><button type=submit value=View class=button value=submit style=font-size:20px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px>View</button></form></td></tr>";
	}
	?>
	</table>
<?php
	}
	if(!isset($_SESSION['username']))
	{
 		include("footer.php");
	}
	else
	{	
		include("footer1.php"); 
	}
?>