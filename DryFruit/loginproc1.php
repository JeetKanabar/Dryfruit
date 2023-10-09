<?php
	$cn=mysqli_connect("localhost","root","","online");

	if(isset($_POST['submit']))
	{
		
		$nm=$_POST['nm'];
		$pass=$_POST['pass'];
		
		$query=mysqli_query($cn,"select * from registration where username='$nm' and password='$pass'");
		$r=mysqli_fetch_array($q);
		if($r[nm]!=$nm && $r[pass]!=$pass)
		{
			echo "<script>alert('User and Password could not match');</script>";
		}
	}
?>