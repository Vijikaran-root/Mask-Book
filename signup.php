<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MASKBOOK</title>
    <style>
.w3-lobster {
  font-family: "Sofia", serif;
}
</style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>


  <body class="bg-secondary">

<div class="w3-border w3-display-center w3-padding">
    <div class="mt-5 p-3 w3-round-xlarge w3-animate-top w3-container">
        <div class="w3-lobster w3-xxxlarge w3-center">SIGNUP</div>
        <div class="m-3 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
</div>
<div class =""> 
    <form onsubmit="return verifyPasswords()" action="dbh/newuser.php" method="POST">

    <div class="form-floating mb-3 ">
  <input type="fname" name="fname"class="form-control " id="fname" placeholder="name@example.com" required>
  <label for="floatingInput">First Name</label>
</div>

<div class="form-floating mb-3">
  <input type="lname" name="lname"class="form-control" id="lname" placeholder="name@example.com" required>
  <label for="floatingInput">Last Name</label>
</div>

  <div class="form-floating mb-3">
  <input type="email" name="email"class="form-control" id="email" placeholder="name@example.com" required>
  <label for="floatingInput">Email address</label>
</div>

<div class="form-floating mb-3">
  <input type="phone" name="phone"class="form-control" id="phone" placeholder="name@example.com" required>
  <label for="floatingInput">Phone Number</label>
</div>

<div class="form-floating mb-3">
  <input type="password" name="password" class="form-control" id="pass1" placeholder="Password" required>
  <label for="floatingPassword">Password</label>
</div>
<div class="form-floating mb-3">
  <input type="password" name="password" class="form-control" id="pass2" placeholder="Password" required>
  <label for="floatingPassword">Retype Password</label>
</div>
  <button type="submit" class="btn btn-primary mt-2">Signup</button>
</div>
<div class="alert alert-danger mt-2" role="alert" id="error" style="visibility:hidden">
        Passwords Do Not Match
      </div>
<?php
                if (isset($_GET['failed'])) {
        echo ("<div class='alert alert-danger mt-2' role='alert' id='failed'>
              User Already Exists!
              </div>");
      }
                ?>
</form>
</div>
</div>  
<script>
    function verifyPasswords() {
      var p1 = document.getElementById("pass1").value;
      var p2 = document.getElementById("pass2").value;
      if (p1 != p2) {
        document.getElementById("error").style.visibility = "visible";
        return false;
      } else {
        return true;
      }
    }

    function hideError() {
      document.getElementById("error").style.visibility = "hidden";
      hideFailed();
    }

    function hideFailed() {
      document.getElementById("failed").style.visibility = "hidden";
    }
  </script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
</body>
</html>