<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
  <div class="">
    <div class="mt-5 p-3 w3-round-xlarge w3-animate-right w3-half w3-container">
        <div class="w3-lobster w3-xxxlarge w3-center">Reset Password</div>
        <div class="m-3 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
</div>
<form action="dbh/forgotten.php" method="POST">
  <div class="form-floating mb-3">
  <input type="email" name="email"class="form-control" id="floatingInput" placeholder="name@example.com" required>
  <label for="floatingInput">Email address</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
                if (isset($_GET['success'])) {
                    echo ("<div class='alert alert-success mt-2' role='alert' id='success'>
                        Confirmation Mail Has Been Sent !!!! Please Check Your Mail !!!
                        </div>");
                }

                if (isset($_GET['invalid'])) {
                    echo ("<div class='alert alert-danger mt-2' role='alert' id='success'>
                        Invalid Email !!!   Enter Correct Email !!!
                        </div>");
                }
                ?>

<script>
function resetPassword (e) {
        e.preventDefault();
				var email = document.getElementById('email').value;
        if(!email)
        {
          alert("Please enter your email.");
          return;
        }
    		webAuth.changePassword({
      		connection: databaseConnection ,
      		email:   email
    			}, function (err, resp) {
      		if(err){
        		console.log(err.message);
            alert(err.message);
      			}else{
        		console.log(resp);
            alert(resp);
      		}});
      }
      </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>