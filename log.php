<?php

session_start(); 


?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Login & Signup Form | CodingNepal</title> -->
    <link rel="stylesheet" href="css/styleup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

  <?php

<div class="body">
<div class="wrapper">
<div class="title-text">
<div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
</div>
<div class="form-inner">
          <form action="#" method="POST" class="login">
            <div class="field">
              <input type="text" name="emailt" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" name="passwordt" placeholder="Password" required>
            </div>
<div class="pass-link"> 
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="submitt" value="Login">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form action="#" method="POST" class="signup">
            <div class="field">
              <input type="text" placeholder="Full Name" name="username" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Phone Number" name="mobile" required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
<div class="field">
              <input type="password" placeholder="Confirm password" name="cpassword" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="submit" value="Signup">
            </div>
            
</form>
</div>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>