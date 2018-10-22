<?php
include "connection.php";
session_start();
if (isset($_GET['serverid'])) {
  $server_id = $_GET['serverid'];
}
if (isset($_GET['servername'])) {
  $server_name = $_GET['servername'];
}
$sql = "INSERT INTO server_members(server_id, server_name, user_id, user_name) VALUES('$server_id','$server_name','".$_SESSION['user']."','".$_SESSION['username']."') ";
$result = mysqli_query($conn,$sql) or die($conn->error);
if ($result == TRUE) {
  header("Location:dashboard.php");
}else{
  header("Location:dashboard.php");
}
 ?>
