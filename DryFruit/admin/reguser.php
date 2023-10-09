<?php
	echo"<title>User</title>";
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from registration");
	if(mysqli_num_rows($q) == 0)
	{
		echo "<h2 align=center> There is No product </h2>";
	}
	else
	{
		include("header.php");
		echo "<br><body background='image/background.svg'><font color=white><h1 align=center>USERS</h1></font>";
		echo "<table  style=width:100% border=3>
								<tr align=center><th><font color=white size =5>Id</th>
								<th><font color=white size =5> Image</th> 
								<th><font color=white size =5> Name</th> 
								<th><font color=white size =5>Mobile NO</th>
								<th><font color=white size =5>Password</th>
								<th><font color=white size =5>E-Mail</th>
								<th><font color=white size =5>Address</th>
								<th><font color=white size =5>City</th>
								<th><font color=white size =5>District</th>
								<th><font color=white size =5>Pincode</th><th></th>
								<th><font color=white size =5>Delete</th></tr>";
								
								     
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr><td align=center ><font color=white  size=5 >".$r[0]."</td>
			<td align=center ><font color=white  size=5 ><img src='../image/logo.png' width='150px' height='150px'></td>
			<td align=center ><font color=white size=5 >".$r[1]."</td>
			<td align=center ><font color=white  size=5 >".$r[3]." </td> 
			<td align=center ><font color=white  size=5 >".$r[2]." </td>	
			<td align=center><font color=white  size=5 >".$r[4]." </td>
			<td align=center ><font color=white size=5 >".$r[5]."</td>
			<td align=center ><font color=white size=5 >".$r[6]."</td>
			<td align=center ><font color=white size=5 >".$r[7]."</td>
			<td align=center ><font color=white size=5 >".$r[8]."</td>
			<td align=center  class=b1><font color=white size=5 ><id=".$r[0]."'>
			<td align=center  class=b1><font color=white size=5 ><a href='reguserdel.php?id=".$r[0]."'><input type=submit value=Delete   style=font-size:13px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></a></td></tr>";
					
		}
		echo "</table>";
	 }
	
?><?php include("footer.php");?>   
