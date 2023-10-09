<?php
	include("header.php");
	echo"<title>View Product</title>";
	echo "<br><body background='image/background.svg'><font color=white><h1 align=center>VIEW PRODUCT</h1></font>";
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from dryfruit");
	if(mysqli_num_rows($q) == 0)
	{
		echo "<h2 align=center> There is No product </h2>";
	}
	else
	{
		echo "<table  width=100%  border=3>
								<tr align=center><th><font color=White size =5>Id</th></font>
								 <th><font color=White size =5> Product Name</th> </font>
								 <th><font color=White size =5>Code</th>
								<th><font color=White size =5>Quantity</th>
								 <th><font color=White size =5>Price</th>
								 <th><font color=White size =5>Category</th>
								<th><font color=White size =5>Photos</th>
								<th><font color=White size =5>Update</th>
								 <th><font color=White size =5>Delete</th></tr>";
								
								     
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr><td align=center ><font color=white  size=5 >".$r[0]."</td>
			<td align=center ><font color=white size=5 >".$r[1]."</td>
			<td align=center ><font color=white  size=5 >".$r[2]." </td> 
			<td align=center ><font color=white  size=5 >".$r[3]." </td>	
			<td align=center><font color=white  size=5 >".$r[4]." </td>
			<td align=center ><font color=white size=5 >".$r[5]."</td>
			<td align=center ><font color=white  size=5 ><img src='image/".$r[6]."'width='150px' height='150px'></td>
			

			
			
			<td align=center  class=b1><font color=white size=5 ><id=".$r[0]."'>
			<form action='prdedit.php' method='POST'><br><input type=hidden name='id' value=".$r[0]."><input type=submit value=Edit   style=font-size:13px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></form></td>
			<td align=center  class=b1><a href='prddel.php?id=".$r[0]."'><input type=submit value=Delete   style=font-size:13px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></a></td></tr>";
				
		
		}
		echo "</table>";
	 }
	
?>
<?php include("footer.php");?>   
