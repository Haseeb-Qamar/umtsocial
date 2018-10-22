<?php
include "connection.php";
if (isset($_GET['q'])) {

   $value = $_GET['q'] ;
$query = "SELECT * FROM servers WHERE server_name LIKE '{$value}%'  ";
$result = mysqli_query($conn, $query);
if ($result == TRUE) {
  echo "<table class='table'><tr><th>Search Results</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td><a href='script_joinserver.php?serverid=".$row['server_id']."&servername=".$row['server_name']."' title='Join Server ".$row['server_name']." '>".$row['server_name']."<span id='async_entries'>".$row['server_desc']."</span></a></td>

    </tr>";
  }
  echo "</table>";
}
}

?>
