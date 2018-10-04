<?php
include "connection.php";
if (isset($_GET['q'])) {

   $value = $_GET['q'] ;
   
$query = "SELECT email FROM users WHERE email = '$value' " ;
$result = mysqli_query($conn, $query);
$hits = mysqli_num_rows($result);
if ($hits == 1) {
  echo "no";
}
else echo "yes";
// while ($row = mysqli_fetch_assoc($result)) {
//   $row['email'];
//}
}


?>
