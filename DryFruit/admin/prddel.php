
<?php
	$cn=mysqli_connect("localhost","root","","online");
	
	$id = $_GET['id'];
	$q = mysqli_query($cn,"delete from dryfruit where id='$id'");
	
?>

<script>
window.location="product.php";
</script>