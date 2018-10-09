<?php
include "connection.php";
if (isset($_POST['server_name']) && isset($_POST['server_desc'])) {
  $server_name = $_POST['server_name'];
  $server_desc = $_POST['server_desc'];
  // echo $server_name . $server_desc;
  $sql = "INSERT INTO servers(server_name,server_desc) VALUES('$server_name','$server_desc')";
  $result = mysqli_query($conn, $sql);
  if ($result == TRUE) {
    header('Location:admin_create_server.php');
  }else{
    header('Location:admin_create_server.php?error=1');
  }
}

 ?>
