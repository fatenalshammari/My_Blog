<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">
  </head>
  <body>

  </body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="contact_blog";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);



if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email= $_POST['email1'];
  $subject= $_POST['subject'];

  $query = "INSERT INTO contact (name, email, subject)
            VALUES ('$name', '$email', '$subject')";

  $result = mysqli_query($conn,$query);

    $msg ="";
    if($result == true){
    $msg ='<div class="alert alert-success">Send successfully</div>';
    echo $msg;
    }else{

    $msg='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    echo $msg;
     }
}

header("location: Task4.php");

    $conn->close();

 ?>
