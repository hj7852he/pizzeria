
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   <?php
    // if login was successful
    $action = isset($_GET['fname']) ? $_GET['fname'] : "";
    if($action=='login_success'){
        echo "<div class='alert alert-info'>";
            echo "<strong>Hi " . $_SESSION['fname'] . ", welcome back!</strong>";
        echo "</div>";
    }
 
    // if user is already logged in, shown when user tries to access the login page
    else if($action=='already_logged_in'){
        echo "<div class='alert alert-info'>";
            echo "<strong>You are already logged in.</strong>";
        echo "</div>";
    }
   
   ?>
   <body>
      <h1>Welcome</h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>