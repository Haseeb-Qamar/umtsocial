<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="chat.css">
  </head>
  <body>
<?php
session_start();
include "connection.php";

$user1 =  $_GET['user1'];
$user2 = $_GET['user2'];
 ?>
<br>
<div class="chat">
<?php

$sql = "SELECT msg FROM chat WHERE email1 ='$user1' AND email2 ='$user2' ";
$result = mysqli_query($conn,$sql) or die($conn->error);
while ($row = mysqli_fetch_assoc($result)) {
  echo" <div class='convo'>".$row['msg']."</div>";
}

 ?>
</div>
<br>
<form class="" action="script_chat.php" method="get">
  <input type="text" name="msg" value="" placeholder="Send Message">
  <input type="submit" name="" value="Send">

</form>
 <script type="text/javascript">
 function sendtext(msg) {

 }
 </script>
  </body>
</html>
