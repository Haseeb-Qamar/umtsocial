<?php
session_start();

include "connection.php";

if (isset($_GET['user'])) {
  $user = $_GET['user'];
   // $user = $user . "@gmail.com";

}
// echo $user;


$sql = "SELECT * FROM chat_details WHERE c_id = '$user' ";

$result = mysqli_query($conn, $sql)or die($conn->error);
$cunt = mysqli_num_rows($result);
if ($cunt == 0) {
  echo "No Chat History Found";
}else{

  $id = mysqli_fetch_assoc($result);
  $idd =$id['c_id'];

  $sql2 = "SELECT * FROM chat_details WHERE c_id ='$idd'";
  $result = mysqli_query($conn,$sql2);
  $count =0;
echo "<div class='theconvos'>";
  while ($row = mysqli_fetch_assoc($result)) {

    echo "

    <div class='chatbox'>";
    if ($row['sender_name'] == $_SESSION['username']) {
      echo "
      <span class='fullmessage1'>

      <span class='sender'>".$row['sender_name'].":</span>
      <span class='chatmessage'>".$row['content']."</span>

      <span id='time'>".$row['sent_time']."</span>
      </span>

      </div>
      ";
    }else{
      echo "
      <span class='fullmessage'>

      <span class='sender'>".$row['sender_name'].":</span>
      <span class='chatmessage'>".$row['content']."</span>

      <span id='time'>".$row['sent_time']."</span>
      </span>

      </div>

      ";
    }


  }
echo "</div>";
}


?>
