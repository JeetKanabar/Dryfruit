<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
	}
	else
	{
		include("header1.php");	
	}
?>
<html>
<head>
	<title>Product</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();   
	});
</script>
</head>
<style>
	*{
		overflow-x: hidden;
	}

	td a img {
        border: 5px dotted #ccc;
		margin: 10px;
    }
h1 {
    position: relative;
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 60px;
    padding-bottom: 20px;
    font-family: 'Courier New', monospace;
}

</style>
<body>
	<br>
<h1>PRODUCT'S</h1>

<table width=100% >
	
	<tr>
		<td>
			<?php
			$cn=mysqli_connect("localhost","root","","online");
			
			$cnt = 0;
			$q = mysqli_query($cn,"select * from dryfruit");
			
			echo "<table  align='center'>" ;
			while($r = mysqli_fetch_array($q))
			{
				if($cnt%4 == 0)
				{		
					echo "<tr><td><a href='productdisc.php?id=".$r[0]."' data-toggle='tooltip' title='$r[1] &nbsp;&nbsp; Order Now'><img src='image/".$r[6]."' width='250px' height='250px' ></a> </td>";
				}
				else
				{
					echo "<td><a href='productdisc.php?id=".$r[0]."' data-toggle='tooltip' title=' $r[1] &nbsp;  &nbsp; Order Now'><img src='image/".$r[6]."' width='250px' height='250px'></a></td>";
				}
				$cnt++;
			}
			echo "</table>";
			?>
		</td>
	</tr>
</table>
</body>
</html>