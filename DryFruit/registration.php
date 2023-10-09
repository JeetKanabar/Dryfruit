<?php include("header.php"); ?><br><br><br><br>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS & JS/registration.css" />
    <title>Registraion Form</title>
  </head>
  <body>
  <div class="first">
    <form action="registrationpro.php" class="form" method="POST">
      <h2>Registration</h2>
      <h3>Enter your credentials</h3>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div class="progress-step progress-step-active"></div>
        <div class="progress-step"></div>
        <div class="progress-step"></div>
        <div class="progress-step"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <input type="text" name="name" placeholder="Username" required/>
        </div>
        <div class="input-group">
          <input type="text" name="mno" placeholder="Phone No" required/>
        </div>
        <div class="nxtbtn" >
          <a href="#" class="btn btn-next width-100" >NEXT</a>
          <br><a href="login.php">Login Already customer??</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
         
          <input type="text" name="pass" placeholder="Password" required/>
        </div>
        <div class="input-group">
       
          <input type="email" name="email" placeholder="Email" required/>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">PREVIOUS</a>
          <a href="#" class="btn btn-next">NEXT</a>
          <a href="login.php">Login Already customer??</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          
          <input type="text" name="address" placeholder="Full Address" required/>
        </div>
        <div class="input-group">
          
          <input type="text" name="city" placeholder="City" required/>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">PREVIOUS</a>
          <a href="#" class="btn btn-next">NEXT</a>
          <a href="login.php">Login Already customer??</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
        
          <input type="text" name="district" placeholder="District" required/>
        </div>
           <div class="input-group">
         
          <input type="text" name="pincode" placeholder="Pin Code" required/>
        </div>
        
        <div class="btns-group">
          <a href="#" class="btn btn-prev">PREVIOUS</a>
          <input type="submit" value="Submit"  name="submit" class="btn" />
          <a href="login.php">Login Already customer??</a>
        </div>
      </div>
    </form>
    <div class="first">
    <script>
      const prevBtns = document.querySelectorAll(".btn-prev");
      const nextBtns = document.querySelectorAll(".btn-next");
      const progress = document.getElementById("progress");
      const formSteps = document.querySelectorAll(".form-step");
      const progressSteps = document.querySelectorAll(".progress-step");

      let formStepsNum = 0;

      nextBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
          formStepsNum++;
          updateFormSteps();
          updateProgressbar();
        });
      });

      prevBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
          formStepsNum--;
          updateFormSteps();
          updateProgressbar();
        });
      });

      function updateFormSteps() {
        formSteps.forEach((formStep) => {
          formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active");
        });
      
        formSteps[formStepsNum].classList.add("form-step-active");
      }

      function updateProgressbar() {
        progressSteps.forEach((progressStep, idx) => {
          if (idx < formStepsNum + 1) {
            progressStep.classList.add("progress-step-active");
          } else {
            progressStep.classList.remove("progress-step-active");
          }
        });
      
        const progressActive = document.querySelectorAll(".progress-step-active");
      
        progress.style.width =
          ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
      }
    </script>
  </body>
</html>