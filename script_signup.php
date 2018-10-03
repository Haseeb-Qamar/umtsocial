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
$sql = "INSERT INTO users(username,password) values('$uname','$password') ";
$result = mysqli_query($conn,$sql);
 
header("Location:dashboard.php");
 ?>
