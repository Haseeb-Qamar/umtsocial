<?php
session_start();
include "connection.php";
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  echo $msg;
}
if (isset($_GET['cid'])) {
  $cid = $_GET['cid'];
  echo $cid;
}
$sql = "INSERT INTO chat_details(c_id,sender_email,content) values('$cid','".$_SESSION['user']."','$msg') ";
$result = mysqli_query($conn,$sql) or die($conn->error);
if ($result == TRUE) {
  echo "somthng";
  // header('Location:dashboard.php');
}else{
  echo "error";
}
 ?>
