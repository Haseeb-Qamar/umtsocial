<?php
session_start();
include "connection.php";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">

      <div class="">
        <?php
$sql = "SELECT * FROM convos";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  echo" <div class=''><a href='chat.php?user1=".$row['user1']."&user2=".$row['user2']."'>".$row['user1']." and ".$row['user2']."</a></div>";
}


          ?>
      </div>
    </form>
  </body>
</html>
