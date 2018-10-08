<?php
session_start();
include "connection.php";
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  // echo $msg;
}
if (isset($_GET['cid'])) {
  $cid = $_GET['cid'];
  // echo $cid;
}
date_default_timezone_set("Asia/Karachi");
$time = date('H:i:s');
$date = date('d-m-Y');
$sql = "INSERT INTO chat_details(c_id,sender_email,sender_name,content,sent_time) values('$cid','".$_SESSION['user']."','".$_SESSION['username']."','$msg','$time') ";
$result = mysqli_query($conn,$sql);
if ($result == FALSE) {
  die($conn->$error);

}else{

}
 ?>

 // // echo $_SESSION['user'];
 // $sql = "SELECT * FROM chat WHERE user1_email = '".$_SESSION['user']."'AND user2_email = '$user' ";
 //
 // $result = mysqli_query($conn, $sql)or die($conn->error);
 // $cunt = mysqli_num_rows($result);
 // // echo $cunt;
 // $id = mysqli_fetch_assoc($result);
 // $idd =$id['c_id'];
 // // echo "asdasd".$idd;
 // $sql2 = "SELECT * FROM chat_details WHERE c_id ='$idd'";
 // $result = mysqli_query($conn,$sql2);
 // while ($row = mysqli_fetch_assoc($result)) {
 //
 // }
