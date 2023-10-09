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
		$r1= mysqli_fetch_row($q1);
?>	
<html>
	<head>
		<title>Your Cart</title>
	<style>
body {

  color:black;
}
</style>
	</head>
<body>	
	<table style="width:100%" align=center border=3>
	
	<h1 align=center>🛒YOUR CART</h1>
	<tr>
		<th colspan="3"><font size=6>Name :</th></font>
		<th colspan="5"><font size=4><?php  echo $_SESSION['username'];?> </th></font>
	</tr>
	<tr>
		<th colspan="3"><font size=6> Contact No :</td></font>
		<th colspan="5"><font size=4> <?php echo $r1[3]; ?></td></font>
	</tr>
	<tr>
		<th colspan="3"><font size=6> Email :</td></font>
		<th colspan="5"><font size=4> <?php echo $r1[4]; ?></td></font>
	</tr>
	<tr>
		<th>No </th>
		<th>Bill No</th>
		<th>Product </th>
		<th>Item </th>
		<th>Quantity</th>
		<th>Rate</th>
		<th>Amount</th>
		<th>Delete</th>
	</tr>

	<?php
	$q4 = mysqli_query($cn,"SELECT * FROM `uorder` WHERE name='".$_SESSION['username']."' AND `status` LIKE 'pending'");
	$no=1;
	$gt=0;
	while($r4 = mysqli_fetch_array($q4))
	{
		$price = $r4[6] * $r4[8];
		$gt = $gt + $price;

		echo "<tr><td align=center ><font color=black  size=5 >".$no++."</td>
		<td align=center ><font color=black size=5 >".$r4[1]."</td>
		<td align=center ><font color=black  size=5 ><img src='image/".$r4[4]."' width='50px' height='50px'></td>
		<td align=center ><font color=black size=5 >".$r4[5]."</td>
		<td align=center ><font color=black  size=5 >".$r4[7]." </td> 
		<td align=center ><font color=black  size=5 >".$r4[8]." </td>	
		<td align=center ><font color=black  size=5 >".$price." </td>";	

		$q5 = mysqli_query($cn,"update dryfruit set conti=conti-".$r4[6]." where nm='".$r4[5]."'");
		echo "<td align=center  class=b1><font color=black size=5 ><a href='ordelete.php?id=".$r4[0]."'><input type=submit value=Delete style=font-size:13px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></a></td></tr>";
	}
	?>
	<tr>
		<td colspan="6" align="right"><font size=6>Final Total :</td></font>
		<td align=center><font size=6> <?php echo $gt; ?></td></font>
	</tr>
	</table>
	<br><br>
	<center><form action="conorder.php" method="POST" ><input type="hidden" name="mno" value="<?php echo $r1[3]?>" > <input type="hidden" name="nm" value="<?php echo $r1[1] ?>"><input type="hidden" name="nm" value="<?php echo $r1[4] ?>"><input type="hidden" name="gt" value="<?php echo $gt; ?>">  <button type="submit" name="confirm_order" style=font-size:30px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px>Conform Order</button></form></center><br><br>
	<center><form action="product.php"><button type="submit" style=font-size:30px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px;>Add More Item</button></form></center><br>
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