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

<div class="w3-border">
    <div class="mt-5 p-3 w3-round-xlarge w3-animate-right w3-half w3-container">
        <div class="w3-lobster w3-xxxlarge w3-center">LOGIN</div>
        <div class="m-3 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
</div> 
    <form action="dbh/login.php" method="POST">
  <div class="form-floating mb-3">
  <input type="email" name="email"class="form-control" id="floatingInput" placeholder="name@example.com" required>
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-1">
  <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required>
  <label for="floatingPassword">Password</label>
</div>
<a href ="forgot.php" class="w3-red">Forgotten Password</a></br>
  <button type="submit" class="btn btn-primary">Login</button>
  <button type="button" class="btn btn-primary" href="signup1.php">
    <a href="signup.php" class="text-white">Register</a>
</button>
  <?php
                if (isset($_GET['success'])) {
                    echo ("<div class='alert alert-success mt-2' role='alert' id='success'>
                        Signup Successful! Please Login
                        </div>");
                }

                if (isset($_GET['invalid'])) {
                    echo ("<div class='alert alert-danger mt-2' role='alert' id='success'>
                        Invalid Login! Please Retry
                        </div>");
                }
                ?>
</form>
</div>
<div class="w3-half w3-round p-5 w3-container">
<img src="mask book.png" class="" alt="" style="width:100%;max-width:600px">
</div> 
</div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
</body>
</html>