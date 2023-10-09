<?php include("header.php"); ?><br><br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS & JS/login & forgot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Login</title>
</head>
<body>
<div class="first">
    <div class="login-card">
        <h2>Login</h2>
        <h3>Enter your credentials</h3>

        <form class="login-form" method="POST" action="loginproc.php">
            <input type="text" name="mno" placeholder="Registered Number">
            <input type="password" name="pass" id="password" placeholder="Password"><i class="toggle-password fas fa-eye" id="togglePassword"></i></input>
            <a href="forgotpass.php">Forget your password?</a>
            <a href="registration.php">Creat a account...</a>
            <button type="submit" name="submit" value="Submit">LOGIN</button>
        </form>
    </div>
</div>
    <script>
       const togglePassword = document.querySelector('#togglePassword');
       const password = document.querySelector('#password');

       togglePassword.addEventListener('click', function () {
           const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
           password.setAttribute('type', type);
           this.classList.toggle('fa-eye');
           this.classList.toggle('fa-eye-slash');
       });
   </script>
</body>
</html>