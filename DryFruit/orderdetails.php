<html>
	<head>
		<title>View Order</title> 
		</title>
	</head>
</html>
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
		$r = mysqli_fetch_row($q1);
?>		
	<h1 align=center>🛒YOUR ORDER 🛒</h1>
	<table style="width:100%" align=center border=3>
	<tr>
		<th colspan="2"><font size=6 >Name :</th></font>
		<th colspan="4"><font size=4 ><?php echo $_SESSION['username']; ?> </th></font>
	</tr>
	<tr>
		<th colspan="2"><font size=6 > Contact No :</td></font>
		<th colspan="4"><font size=4 ><?php echo $r[3]; ?></td></font>
	</tr>
	
	<?php
	$billno=$_POST['billno'];
	$q4 = mysqli_query($cn,"SELECT * FROM `uorder` WHERE `name`='".$_SESSION['username']."' AND `status` LIKE 'ok' AND `billno` = '$billno'");
	$no=1;
	echo"<tr>
		<th colspan='2'><font size=6 >Bill No</th></font>
		<th colspan='4'><font size=4 >".$billno." </th></font>
		</tr>";
	echo"<tr>
		<th><font size='6'>No </font></th>
		<th><font size='6'>Product </font></th>
		<th><font size='6'>Item </font></th>
		<th><font size='6'>Quantity </font></th>
		<th><font size='6'>Rate</font></th>
		<th><font size='6'>Amount</font></th>
	</tr>";
	$gt = 0;
	while($r4 = mysqli_fetch_array($q4))
	{
		
		$price = $r4[6] * $r4[8];
		$gt = $gt + $price;
		echo "<tr bgcolor=white><td align=center ><b><font color=black  size=4 >".$no++."</td>
		
		<td align=center ><font color=black  size=4 ><img src='image/".$r4[4]."' width='50px' height='50px'></td>
		<td align=center ><font color=black size=4 ><b>".$r4[5]."</td>
		<td align=center ><font color=black  size=4 ><b>".$r4[7]." </td>
		<td align=center ><font color=black  size=4 ><b>".$r4[8]." </td>
		<td align=center ><font size=4><b>".$price." </td></font></tr>";	
	}
	?>
	<tr>
		<td colspan="5" align="right"><font size='6'><b>Final Total :</font></td>
		<td align="center"><font size='5'><b><?php echo $gt; ?></font></td>
	</tr>
	</table>
<br>
<?php
	}
	include("footer.php");
?>	
