<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
		 include("slider.php");
		 include("services.php");
		 include("review.php");
		 include("footer.php");
	}
	else
	{
		include("header1.php");
		include("slider.php");
		include("services.php");
		include("review.php");
		include("footer1.php");	
	}
?>