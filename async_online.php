<?php
session_start();
include "connection.php";
$query = "SELECT * FROM online";
$result = mysqli_query($conn, $query)or  die($conn->error);
if ($result == TRUE) {
  if (mysqli_num_rows($result) <= 1) {
     echo "No Other Users Online";

  }else{

    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['username'] != $_SESSION['username']) {

        echo $row['username']."
        <img class='circle' src='assets/indicator.png'>
        <br>";
      }

    }
  }

}


?>
