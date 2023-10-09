<html>
	<head>
		<style>
			button{
				font-size:30px;
				border-color:#6faaff;
				color:white;
				background:#6faaff;
				border-radius:10px;
				margin:1px;
				padding:8px;
				border-width:10px;
			}
		</style>
	</head>
<body>
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
		if(isset($_POST['confirm_order']))
		{
			$billno=0;
			$q2=mysqli_query($cn,"select max(billno) as mbil from order_detail");
			while($r=mysqli_fetch_array($q2))
			{ $billno=$r[0]+1;}
		
			//$mb=$_POST['billno'];
			$name=$_SESSION['username'];
			$mno=$_POST['mno'];
			$dt = date('d-m-Y');
			$gt=$_POST['gt'];
			$email = $_POST['nm'];
			echo "<center>";
			echo "<h1>Thank You....🤝".$name."</h1><br>";	
			echo "<h1>Your Order is Successfully <br> Update will be send to your Registered Email:: ".$email."</h1>";
			echo "<h1>Your Total Amount is :: ".$_POST['gt']."</h1>";
			echo "<h1> Pay on Delivery</h1>";
			echo "<a href='index.php'><button>Continue Shopping</button> </a>";
			echo "</center>";

			$email = "$email";
			$subject = "Confirmed Order";
			$body = "Thank You So Much For Choosing DryFruit.com

Your Order Is Confirmed. 

Thank You....🤝$name.

We Contact You And Delevered The Order As Per Your Details. 

Thank You User Keep Shopping. 

Your Order Is Successfully Update Will Be Send To Your Registered Email:: $email.

Your Total Amount Is :: $gt.

Pay On Delivery.

::You Need Any Help You Contect Me On Call Or Message::
Contect No:: 7862058581 / 8735021505";
			$headers = "From: dryfruitforyou@gmail.com";

			if (mail($email, $subject, $body, $headers)) 
			{
		
			} 
			$q1 = mysqli_query($cn,"INSERT INTO `order_detail` (`id`, `billno`,`name`,`cno`, `date`, `amt`) VALUES (NULL, '$billno', '$name','$mno','$dt', '$gt')");
			$q=mysqli_query($cn,"UPDATE  uorder SET  billno='".$billno."',date='".$dt."', status ='ok' where name='".$name."' and status like 'pending'");
		}

	}	
?>
<br>
	</body>
</html>
<?php include("footer.php"); ?>