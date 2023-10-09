<html>
<body>
<table width=100%>
	<tr>
		<td>
			<?php include("header.php");?>
		</td>
	</tr>
	<tr>
		<td>
			<?php
			$unm=$_SESSION['username'];
			$cn = mysqli_connect("localhost","root","","online");
			
			if(isset($_GET['id']))
			{
				$id = $_GET['id'];
				$q = mysqli_query($cn,"select * from product where id='$id'");
				$r = mysqli_fetch_row($q);
				$q1=mysqli_query($cn,"insert into uorder values('','$unm','$r[3]','$r[5]')");
				$q2=mysqli_query($cn,"select * from uorder where uname='$unm'");
				while($r1 = mysqli_fetch_array($q2))
				{
					echo "<table><tr><td><img src='p1/".$r1[2]."' width=150px height=200px><td>";
					echo "<td>".$r1[3]."/- Rs</td><td><a href='odel.php?id=".$r[0]."'>Delete</a></tr></table>";
				}
			}
			else
			{
				$q2=mysqli_query($cn,"select * from uorder where uname='$unm'");
				if(mysqli_num_rows($q2)==0)
				{
					echo "<h2 align=center>No order Given</h2>";
				}
				else
				{
					while($r1 = mysqli_fetch_array($q2))
					{
						echo "<table><tr><td><img src='p1/".$r1[2]."' width=150px height=200px><td>";
						echo "<td>".$r1[3]."/- Rs</td><td><a href='odel.php?id=".$r1[0]."'>Delete</a></tr></table>";
					}
				}
			}
			?>
		</td>
	</tr>
</table>
</body>
</html>
<?php include("footer.php");?>