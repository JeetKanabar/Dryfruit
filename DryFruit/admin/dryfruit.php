<?php
	include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<style>
b{
  color: while;
}
body {font-family: Arial, Helvetica, sans-serif; background: url("image/background.svg");}
form {border: 3px #f1f1f1;}

input[type=text], input[type=file], input[type=data]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #ccc;
  box-sizing: border-box;
  border-radius: 0.50rem;
}
.container {
  padding-left: 500px;
  padding-right: 500px;
}
</style>
<link rel="stylesheet" href="../style2.css">
</head>
<body>
<br>
<font color="white">
<h1 align="center">INPUT DRY-FRUIT</h1>
<form action="dryprocess.php" method="post" enctype="multipart/form-data">
  <div class="container">  
	<b>Name :</b>
    <input type="text" placeholder="ENTER NAME" name="nm" required>

    <b>Code :</b>
    <input type="text" placeholder="ENTER CODE" name="code" required>
    
     <b>Quantity :</b>
    <input type="text" placeholder="ENTER QUANTITY" name="conti" required>
    
     <b>Price :</b>
    <input type="text" placeholder="ENTER PRICE" name="price" required>
    
	<b>Category :</b>
    <input type="text" placeholder="ENTER CATEGORY" name="cat" required>

	<b>Photo :</b>
	<input type="file" name="photo" required>
    
    <input type="submit" name="b1" value="Add" style="font-size:20px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px"></td>
	<span class="psw"><input type="reset" name="b2" value="Reset" style="font-size:20px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px"></td></span>
  </div>
</font>
</form>
</body>
</html>
<?php include("footer.php");?>