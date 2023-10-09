<?php
	include("header.php");
	echo"<title>View Order</title>";
	echo "<body background='image/background.svg'><font color=white><h1 align=center>VIEW ORDER</h1></font>";
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from uorder");
	
	echo "<table border=2 width=100%>";
	echo "<tr><td align=center><font size=+2  color=white><B>Id</td>
		<td align=center><font size=+2 color=white><B>Bill No</td>
		<td align=center><font size=+2 color=white><B>Name</td>
		<td align=center><font size=+2 color=white><B>Date</td>
		<td align=center><font size=+2 color=white><B>Photo</td>
		<td align=center><font size=+2 color=white><B>Product Name</td>
		<td align=center><font size=+2 color=white><B>Quantity</td>
		<td align=center><font size=+2 color=white><B>Price</td>
		<td align=center><font size=+2 color=white><B>Status</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr align=center style=color:white;><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td><img src='image/".$r[4]."'width='100px' height='100px'></td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[8]."</td><td>".$r[9]."</td>
		</tr>";	}
	echo "</table>";
?>
<?php include("footer.php");?>   


	