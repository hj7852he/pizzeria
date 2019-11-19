<?php
include_once 'connectDB.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<?php include "templates/header.php"; ?> 
    </header>
          
    <main role="main">
<br>
<?php



$sql="SELECT StreetAdd,City,State,ZIP FROM location";
$result=mysqli_query($conn,$sql);
// Associative array
$row=mysqli_fetch_assoc($result);
printf("%s %s %s %s\n",$row["StreetAdd"],$row["City"], $row["State"],$row["ZIP"]);
// Free result set
mysqli_free_result($result);
mysqli_close($conn);


?>


<br>
 </body>
</html>




<br>
                 
<?php include "templates/footer.php"; ?> 
</body>
</html>