<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "contact_info";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
      echo "Not Connected";
}

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

$sql = "INSERT INTO `info`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$name','$email','$phone','$message')";

$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" type="image/x-icon" href="../Images/img-DS.png" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
        rel="stylesheet"
      />
      <title>Dingo Shoes</title>
    </head>
    <style>
      h1 {
        font-family: "Montserrat";
        font-size: 150px;
        text-align: center;
      }
      p {
        text-align: center;
      }
      a {
        font-family: "Montserrat";
        text-decoration: none;
        color: black;
        font-size: 50px;
      }
      a:hover {
        color: paleturquoise;
      }
    </style>
    <body>
      <h1>Data Transfer
      <?php 
      if($result){
        echo "Successfully";
      }
      else{
          echo "Failed";
      }
      ?>
       </h1>
      <p><a href="../index.html">Click here to go back</a></p>
    </body>
  </html>