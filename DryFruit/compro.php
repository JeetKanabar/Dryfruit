<?php	
	$cn = mysqli_connect("localhost","root","","online");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cno = $_POST['cno'];
		$comment = $_POST['comment'];

		$q = mysqli_query($cn,"INSERT INTO `online`.`complain`VALUES (NULL, '$name', '$email','$cno','$comment');");
	}
	echo "<script>window.location='index.php'</script>";		
?>