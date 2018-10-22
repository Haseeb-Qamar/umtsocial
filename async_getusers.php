<?php
include "connection.php";
if (isset($_GET['q'])) {

   $value = $_GET['q'] ;
$query = "SELECT * FROM users WHERE username LIKE '{$value}%'  ";
$result = mysqli_query($conn, $query);
if ($result == TRUE) {
  echo "<table class='table'><tr><th>Search Results</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>".$row['username']."<span id='async_entries'>".$row['email']."</span></td>

    </tr>";
  }
  echo "</table>";
}
}

?>
