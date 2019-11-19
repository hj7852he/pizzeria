<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    



$conn = new mysqli('localhost','root' ,'','pizzeria');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into customer(fname, lname, email, password)
    values(?,?,?,?)");
    $stmt->bind_param("ssss", $fname, $lname, $email, $password);
    $stmt->execute();
    header("Location: signup.php");
    echo "Registration Successfull...";
    $stmt->close();
    $conn->close();
}
?>
