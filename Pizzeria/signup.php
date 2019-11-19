<?php
   include("connectDB.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM customer WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['Cus_ID'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: test.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<h2>Logged in</h2>
<?php include "templates/header.php"; ?> 
          
    <main role="main">
<br>
<br>
<br>
<form action="" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail" name="email">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword" name="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Submit">
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

</body>
</html>