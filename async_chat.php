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

      <div class='chatwrapper'>
      <span class='sender'>You:</span>
<span id='time'>".$row['sent_time']."</span>
<br>
      <div class='fullmessage'>
      <span class='chatmessage'>"
      .$row['content'].
      "</span>
      </div>
      </div>




      </div>
      ";
    }else{
      echo "

      <div class='chatwrapper1'>

      <span class='sender'>".$row['sender_name'].":</span>
      <span id='time'>".$row['sent_time']."</span>
      <br>
      <div class='fullmessage'>

      <span class='chatmessage'>"
      .$row['content']."</span>
      </div>



      </div>

      </div>

      ";
    }


  }
echo "</div>";
}


?>
