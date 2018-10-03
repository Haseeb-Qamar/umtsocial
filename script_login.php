<?php
session_start();
include "connection.php";
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
if (isset($_POST['password'])) {
  $password = $_POST['password'];
}
echo $uname . $password ;

$sql = "SELECT * FROM users WHERE email ='$email' AND password='$password' ";
$result = mysqli_query($conn,$sql) or  die($conn->error);
$count = mysqli_num_rows($result);
echo $count;
if ($count == 1) {
$_SESSION['user'] = $email;
header('Location:dashboard.php');
}else{
  header('Location:index.php?error=1');
}


?>
