<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
	}
	else
	{
		include("header1.php");	
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed'>
<link rel="stylesheet" href="./CSS & JS/contact.css">
</head>
<body>
  
<!-- partial:index.partial.html -->
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : +91 xxx2xxx85x</div>
          <div class="app-contact">ADDRESS: JUNAGADH,GUJARAT</div>
          <div class="app-contact">EMAIL-ID : DRYFRUITFORYOU@GMAIL.COM</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
          <form action="feedpro.php" method="POST">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="CONTACT NO" name="cno" required>
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE" name="comment" required>
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button" name="submit">SEND</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
  if(!isset($_SESSION['username']))
  {
    include("footer.php");
  }
  else
  {	
    include("footer1.php"); 
  }
?>