<?php
	include("header.php");
	echo"<title>View Feedback</title>";
	echo "<br><body background='image/background.svg'><font color=white><h1 align=center>FEEDBACK VIEW</h1></font>";
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from feedback");
	
	echo "<table border=2 width=100%>";
	echo "<tr><td align=center><font size=+2  color=white><B>Id</td>
		<td align=center><font size=+2 color=white><B>Name</td>
		<td align=center><font size=+2 color=white><B>Email</td>
		<td align=center><font size=+2 color=white><B>Contact No</td>
		<td align=center><font size=+2 color=white><B>Feedback</td>
		<td align=center><font size=+2 color=white><B>Delete</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr style=color:white;><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td></font>
		<td align=center class=b1><a href='feedbackdel.php?id=".$r[0]."'><input type=submit value=Delete  style=font-size:13px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></a></td></tr>";	}
	echo "</table>";
?>
<?php include("footer.php");?>   


	