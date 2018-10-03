<?php
session_start();
include "connection.php";
if (isset($_POST['username'])) {
  $uname = $_POST['username'];
}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}if (isset($_POST['password'])) {
  $password = $_POST['password'];
}
echo $uname . $email . $password ;
$sql = "INSERT INTO users(username,email,password) values('$uname','$email','$password') ";
$result = mysqli_query($conn,$sql) or die($conn->error);
if ($result == TRUE) {
  $_SESSION['user'] = $email;
header("Location:dashboard.php");
}
else {
  echo "phadda";
}

 ?>
