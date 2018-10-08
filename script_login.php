<?php
session_start();
include "connection.php";
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
if (isset($_POST['password'])) {
  $password = $_POST['password'];
}

if(isset($_POST['admincheck']))
{

  // admin's dash
  // admin username = admin@gmail.com
  // admin password = admin
  if ($email == 'admin@gmail.com' && $password == 'admin') {
    header("Location:admindash.php");
  }else{
    header("Location:index.php?error=1");
  }

}
else {
  echo "not checked.";
}
$sql = "SELECT * FROM users WHERE email ='$email' AND password='$password' ";
$result = mysqli_query($conn,$sql) or  die($conn->error);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$uname = $row['username'];
echo $uname . $password ;
echo $count;
if ($count == 1) {
  $sql = "INSERT INTO online(username,email) values('$uname','$email')";
  $result = mysqli_query($conn,$sql) or  die($conn->error);
$_SESSION['user'] = $email;
$_SESSION['username'] = $uname;
header('Location:dashboard.php');
}else{
// header('Location:index.php?error=1');
}


?>
