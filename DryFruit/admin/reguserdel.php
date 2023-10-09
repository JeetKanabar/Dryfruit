
<?php
	$cn=mysqli_connect("localhost","root","","online");
	
	$id = $_GET['id'];
	$q = mysqli_query($cn,"delete from registration where id='$id'");
	
?>

/*<script>
window.location="reguser.php";
</script>*/
delete from feedback where id='$id