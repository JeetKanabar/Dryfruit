<?php
	$cn=mysqli_connect("localhost","root","","online");
	

	$nm=$_POST['nm'];
	$code=$_POST['code'];
	$conti=$_POST['conti'];
	$price=$_POST['price'];
	$cat=$_POST['cat'];



	if(file_exists("../p1/".$_FILES['photo']['name']))
	{
		echo "<script>alert('Product already exist')</script>";
		echo "<script>window.location='vegetable.php'</script>";
	}
	else
	{
		
		move_uploaded_file($_FILES['photo']['tmp_name'],"image/".$_FILES['photo']['name']);
		$photo=$_FILES['photo']['name'];
	
		$q1=mysqli_query($cn,"insert into dryfruit values('','$nm','$code','$conti','$price','$cat','$photo')");		
		echo "<script>alert('Thank You For Add New Product');</script>";
		echo "<script>window.location='index.php';</script>";	
	}
?>






