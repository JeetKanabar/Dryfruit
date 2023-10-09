<?php
	$id=$_POST['id'];
	$nm=$_POST['nm'];
	$code=$_POST['code'];
	$conti=$_POST['conti'];
	$price=$_POST['price'];
	$cat=$_POST['cat'];
	
	$cn=mysqli_connect("localhost","root","","online");
	

	$q=mysqli_query($cn,"UPDATE  dryfruit SET  nm='$nm',code='$code',conti='$conti',price= '$price',cat= '$cat' where id='$id'");

	echo "<script>alert('Product Details updated successfully')</script>";
	echo "<script>document.location='product.php'</script>";
?>