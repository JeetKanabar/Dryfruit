
<?php
	$cn=mysqli_connect("localhost","root","","online");
	
	$id = $_GET['id'];
	$q = mysqli_query($cn,"delete from feedback where id='$id'");
	
?>

/*<script>
window.location="feedbckdisp.php";
</script>*/