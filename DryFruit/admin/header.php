<?php
	session_start();
	$cn=mysqli_connect("localhost","root","","online");
	if(!isset($_SESSION['adminname']))
	{
		header('location:../index.php');
	}
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <!-- <title>Responsive Navbar with Searchbox</title> -->
      <link rel="stylesheet" href="style1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
   <body>
      <nav>
         <ul>
            <a href="index.php"><img src="image/main.png" height="40" width="60"></a>
            <li class="logo">ADMIN</li><br><br><br>
            <div class="items">
               <li><a href="index.php">Home</a></li>
               <li><a href="dryfruit.php">Add Product</a></li>
               <li><a href="product.php">View Product</a></li>
               <li><a href="orderdisp.php">View Order</a></li>
               <li><a href="reguser.php">User</a></li>
               <li><a href="feedbckdisp.php">View Feedback </a></li>
               <li><a href="complaindisp.php">View Complain </a></li>
               <li><a href="logout.php">Sign-Out📴</a></li>
            </div>
         </ul>
      </nav>
      <script>
         $('nav ul li.btn span').click(function(){
           $('nav ul div.items').toggleClass("show");
           $('nav ul li.btn span').toggleClass("show");
         });
      </script>
   </body>
</html>

