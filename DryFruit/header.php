<?php
	$cn=mysqli_connect("localhost","root","","online");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed'>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px; 
}

.topnav {
  overflow: hidden;
  background-color: #e6f0ff;
  display:flex;
  align-items:center; /* Fix typo in the property name */
  justify-content:space-evenly;
}

.topnav a {
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-weight:700;
}

.topnav .search {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  cursor: pointer;
  font-weight:700;
}
.topnav .user{
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  cursor: pointer;
}
.topnav a:hover {
  background-color: #6fdeff;
  color: black;
  text-decoration: none;
  border-radius: 3px;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}
.secnav .search-container {
	height:55px;
  background-color:#e6f0ff;
  padding: 6px 40px;
  overflow:hidden;  
}

.secnav input[type=text] {
  padding: 6px ;
  width:50%;
  font-size: 17px;
  border: none;
  border: 2px solid #ebebeb;
  border-radius: 5px;
  margin-left:25%;
}

.secnav .search-container button {
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border: none;
  border: 2px solid #ebebeb;
  border-radius: 5px;
}

.secnav .search-container button:hover {
  background: #ccc;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="index.php">HOME</a>
  <a href="product.php">PRODUCT</a>
	<a href="about.php">ABOUT</a>
  <a href="index.php"><img src="image/main.png" height="40" width="60"></a>
  <a href="contact.php">CONTACT</a>
    <a href="login.php">SIGN-IN</a>
    <span id="searchIconContainer" class="search">
      <i class="fa fa-search" aria-hidden="true"></i> SEARCH
    </span>
</div>
<div class="secnav">
  <div class="search-container" id="searchContainer" style="display: none;">
    <form action="productdisc.php" method="GET">
      <input type="text" placeholder="Search.." name="id">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<script>
 document.addEventListener("DOMContentLoaded", function() {
    const searchIconContainer = document.getElementById("searchIconContainer");
    const searchContainer = document.getElementById("searchContainer");

    searchIconContainer.addEventListener("click", function() {
      if (searchContainer.style.display === "none" || searchContainer.style.display === "") {
        searchContainer.style.display = "block";
        searchIconContainer.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i> CLOSE';
      } else {
        searchContainer.style.display = "none";
        searchIconContainer.innerHTML = '<i class="fa fa-search" aria-hidden="true"></i> SEARCH';
      }
    });
  });
  </script>
</body>
</html>


