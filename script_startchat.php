<?php
session_start();
include "connection.php";
if ( isset($_GET['username'])) {
  $username = $_GET['username'];
  $email = $_GET['usermail'];
  // echo $email . $username;
}
else {
  echo "string";
}
$query = "SELECT * FROM chat WHERE user1_email ='$email'AND user2_email='".$_SESSION['user']."' OR user1_email ='".$_SESSION['user']."'AND user2_email='$email' ";
$check = mysqli_query($conn,$query);
echo mysqli_num_rows($check);
if (mysqli_num_rows($check) >= 1) {
    echo "Chat Already Exists!";
}
else {
  $sql = "INSERT INTO chat(user1_email,user2_email,user_name1,user_name2) values('$email','".$_SESSION['user']."','$username','".$_SESSION['username']."') ";
  $result = mysqli_query($conn,$sql);
  if ($result == TRUE) {
    sleep(3);
    date_default_timezone_set("Asia/Karachi");
    $time = date('H:i:s');
    $date = date('d-m-Y');
    $query = "SELECT * FROM chat WHERE user1_email ='$email'AND user2_email='".$_SESSION['user']."' OR user1_email ='".$_SESSION['user']."'AND user2_email='$email' ";
    $check = mysqli_query($conn,$query);
    $getcid = $check->fetch_assoc();
    $cid = $getcid['c_id'];
    $addconvo = "INSERT INTO chat_details(c_id,sender_email,sender_name,content,sent_time) values('$cid','".$_SESSION['user']."','Admin','Chat Started','$time')";
    $send = mysqli_query($conn,$addconvo);
    if ($send == TRUE) {
      header("Location:dashboard.php?convo=$cid&person=$username");
    }else {
      $conn->error;
    }

  }
  else{
    $conn->error;
  }
}
 ?>
