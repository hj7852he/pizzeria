<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>

<?php include "templates/header.php"; ?> 




    <main role="main">
    </main>

    <form action="connect.php" method="POST">
            <div class="containr">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
            </div>
            <div class="form-group">
              <label for="fname"><b>First Name</b></label>
              <input type="text" placeholder="Enter First Name" id="fname" name="fname" required>
            </div>
            <div class="form-group">
              <label for="lname"><b>Last Name</b></label>
              <input type="text" placeholder="Enter Last Name" id="lname" name="lname" required>
        </div>
        <div class="form-group">
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" id="email" name="email" required>
        </div>
        <div class="form-group">
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" id="password" name="password" required>
        </div>
          
            <button type="submit" class="registerbtn">Register</button>
            
          
            <div class="container signin">
              <p>Already have an account? <a href="signup.php">Sign in</a>.</p>
            </div>
          </form>




<?php
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>



    <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2012-2019 Papa's Pizzeria, Inc. &middot; <a href="privacy.html">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
    </body>
    </html>