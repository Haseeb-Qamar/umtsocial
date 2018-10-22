<?php
session_start();
include "connection.php";
$serverid = $_GET['sid'];
// echo $serverid;
$sql = "SELECT * FROM server_chats WHERE sid = '$serverid'";
$server_cahts = mysqli_query($conn,$sql) or die($conn->error);
echo "<div class='theconvos'>";
while ($row = mysqli_fetch_assoc($server_cahts)) {
  echo "

  <div class='chatbox'>";
  if ($row['user_name'] == $_SESSION['username']) {
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

    <span class='sender'>".$row['user_name'].":</span>
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




?>
