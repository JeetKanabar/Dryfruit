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
		$cn = mysqli_connect("localhost","root","","online");
		if(isset($_POST['ordsubmit']))
		{
			$id = $_POST['id'];
			$qty = $_POST['qty'];
			$unit = $_POST['unit'];
			$name = $_SESSION['username'];
			$dt = date('d-m-Y');

			$cn=mysqli_connect("localhost","root","","online");	
			$q = mysqli_query($cn,"select * from dryfruit where id ='".$id."'");
			$r = mysqli_fetch_row($q);
			$q1 = mysqli_query($cn,"INSERT INTO `uorder` (`id`,`name`,`date`,`photo`, `pname`,`qty`,`unit`,`price`,`status`) VALUES (NULL, '$name', '$dt', '$r[6]', '$r[1]','$qty','$unit', '$r[4]', 'pending');");

			unset($_POST['ordsubmit']);
			echo"<script>window.location='orderdisp.php'</script>";
		}
		echo"<script>window.location='index.php'</script>";
	}
?>	
