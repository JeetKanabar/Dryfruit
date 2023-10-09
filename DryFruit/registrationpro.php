<?php	
	$cn = mysqli_connect("localhost","root","","online");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$mno = $_POST['mno'];		
		$email = $_POST['email'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$district = $_POST['district'];
		$pincode = $_POST['pincode'];

		$q2=mysqli_query($cn,"SELECT * FROM `registration` WHERE mno='$mno'");
		if(mysqli_num_rows($q2)==0)
		{			
			$q = mysqli_query($cn,"INSERT INTO `registration` (`id`,`name`,`pass`,`mno`,`email`,`address`,`city`,`district`,`pincode`,`type`) VALUES (NULL, '$name', '$pass', '$mno', '$email','$address', '$city', '$district', '$pincode', 'user');");
			echo "<script>window.location='login.php'</script>";
		}
		else
		{
			echo "<script>alert('User already registered')</script>";
			echo "<script>window.location='login.php'</script>";
		}
	}
	else
	{
		echo "<script>window.location='index.php'</script>";
	}	
	if(isset($_POST['submit']))
	{
		$cn = mysqli_connect("localhost","root","","online");
		
		$email=$_POST['email'];
	
		$q=mysqli_query($cn,"select * from registration where  email='$email'");
		$r=mysqli_fetch_row($q);
		if($r[4]==$email)
		{	
			
			$email = "$r[4]";
			$subject = "Welcome To Our site";
			$body = "Hi $r[1].

Thank You for Login Our Site.We hope you enjoy shopping on our site.

Your Name Is:: $r[1]
Your Mobile No:: $r[3]
Your E-mail is :: $r[4]
Your Address Is :: $r[5],$r[6],$r[7],$r[8]


::You Need Any Help You Contect Me On Call Or Message::
Contect No:: 7862058581 / 8735021505";
			$headers = "From: dryfruitforyou@gmail.com";

			if (mail($email, $subject, $body, $headers)) 
			{
				echo "<script>window.location='login.php'</script>";
			} 
		}
		
	}
	
?>