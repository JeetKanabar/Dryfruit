<?php
	include("header.php");
	echo"<title>View Complain</title>";
	echo "<br><body background='image/background.svg'><font color=white><h1 align=center>COMPLAIN VIEW</h1></font>";
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from complain");
	
	echo "<table border=2 width=100%>";
	echo "<tr><td align=center><font size=+2  color=white><B>Id</td>
		<td align=center><font size=+2 color=white><B>Name</td>
		<td align=center><font size=+2 color=white><B>Email</td>
		<td align=center><font size=+2 color=white><B>Contact No</td>
		<td align=center><font size=+2 color=white><B>Feedback</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr style=color:white;><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td>
		</tr>";	}
	echo "</table>";
?>
<?php include("footer.php");?>   


	