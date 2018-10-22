<?php
session_start();
include "connection.php";
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  echo $msg;
}
if (isset($_GET['sid'])) {
  $cid = $_GET['sid'];
  echo $cid;
}
date_default_timezone_set("Asia/Karachi");
$time = date('H:i:s');
$date = date('d-m-Y');
$sql = "INSERT INTO server_chats(sid,user_email,user_name,content,sent_time) values('$cid','".$_SESSION['user']."','".$_SESSION['username']."','$msg','$time') ";
$result = mysqli_query($conn,$sql);
if ($result == FALSE) {
  die($conn->$error);

}else{

}
 ?>
