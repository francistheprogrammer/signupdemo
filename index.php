<?php 
  include("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="sign-up-form">
        <h1>SIGN UP FORM</h1>
        <form action="signup.php" method="post">
            <input type="text" id="username" name="username" placeholder="Enter your username"> <br><br>
            <input type="email" id="email" name="email" placeholder="Enter a valid email address"> <br><br>
            <input type="password" id="password" name="password" placeholder="Create a password"> <br><br>
            <input type="password" id="cpassword" name="cpassword" placeholder="Re-type your password"> <br><br>
            <input type="submit" id="btn" value="Sign Up" name="submit">
        </form>
    </div>
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>