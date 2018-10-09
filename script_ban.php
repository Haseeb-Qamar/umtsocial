<?php
include "connection.php";
if (isset($_GET['email']) && isset($_GET['status'])) {
  $email = $_GET['email'];
  $status = $_GET['status'];
  echo $email.$status;
}
if ($status == 1) {
$sql = "UPDATE users SET status =0 WHERE email= '$email'";
$result = mysqli_query($conn,$sql) or die($conn->error);
if ($result ==TRUE) {
  header('Location:admin_ban.php');
}else{
  header('Location:admin_ban.php?error=1');
}

}
else {
$sql = "UPDATE users SET status =1 WHERE email= '$email'";
$result = mysqli_query($conn,$sql) or die($conn->error);
if ($result ==TRUE) {
  header('Location:admin_ban.php');
}else{
  header('Location:admin_ban.php?error=1');
}

}

 ?>
