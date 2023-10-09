<?php include("header.php"); ?><br><br><br><br><br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS & JS/login & forgot.css">
    <title>Forgot Password</title>
</head>
<body>
	<div class="first">
		<div class="login-card">
			<h2>Forgot Password</h2>
			<h3>Enter your email</h3>

			<form class="login-form" method="POST" action="#">
				<input type="email" name="email" placeholder="Your email">
				<a href="login.php">Back to login..!</a>
				<button type="submit" name="submit" value="Submit">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>	

<?php 
	if(isset($_POST['submit']))
	{
		$cn = mysqli_connect("localhost","root","","online");
		
		$email=$_POST['email'];
	
		$q=mysqli_query($cn,"select * from registration where  email='$email'");
		$r=mysqli_fetch_row($q);
		if($r[4]==$email)
		{	
			
			$email = "$r[4]";
			$subject = "Forgot Password";
			$body = "Hi $r[1].

We Received A Request To The Password For Your Account.

Your Name Is:: $r[1]
Your Mobile No:: $r[3]
Your Account Password is :: $r[2]

::You Need Any Help You Contect Me On Call Or Message::
Contect No:: 7862058581 / 8735021505";
			$headers = "From: dryfruitforyou@gmail.com";

			if (mail($email, $subject, $body, $headers)) 
			{
				echo "<script>alert('Password successfully sent to Your email')</script>";
				echo "<script>window.location='login.php'</script>";
			} 
			else 
			{
				echo "<script>alert('Email sending failed...')</script>";
			}
		}
		else
		{
			echo "<script>alert(' Email is Wrong......')</script>";
			echo "<script>window.location='forgotpass.php'</script>";
		}
	}
?>
</div>
</body>
</html>