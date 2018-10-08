<?php session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "connection.php";
if (!isset($_SESSION['user'])) {
    header("Location:index.php?error=2");

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - UMT | SOCIAL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="dashboard.css">
    <style>
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #1d1d1d;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>
  </head>
  <body onload="test()">
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgb(40, 43, 48);border-bottom:2px solid rgba(49, 51, 57, 1);">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Settings</a>
          </ul>
      </div>
      <div class="mx-auto order-0">

          <a class="navbar-brand mx-auto" href="#">UMT | SOCIAL</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" title="Logged in as <?php echo htmlspecialchars($_SESSION['username']) ?>" href="#"><?php echo htmlspecialchars($_SESSION['username']) ?></a>
              </li>

          </ul>
      </div>
  </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-1">
          <div class="servers text-center">
            <span class="themedtext large">Servers</span>
            <hr>
            <?php
            $query = "SELECT * FROM server_members WHERE user_id='".$_SESSION['user']."'";
            $getservermembers = mysqli_query($conn, $query) or die($conn->error);
            while ($row = mysqli_fetch_assoc($getservermembers)) {
            echo "<div id='servers' class='themedtextdark'><a href='#'>".$row['server_name']."</a></div>";
            }

             ?>
          </div>
        </div>
        <div class="col-sm-1">
        <div class="onlinecol text-center">
        <span class="themedtext large">People</span>
        <hr>
        <?php
        $sql = "SELECT username,email FROM users";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result) ) {
          echo "<div class='themedtextdark'><a href='#'>".$row['username']."</a></div>";
        }

        ?>

        </div>
        <div class="userchats text-center">
          <span class="themedtextdark large">Chats</span>
          <hr>
          <?php

          $sql = "SELECT * FROM chat WHERE user1_email = '".$_SESSION['user']."' OR user2_email = '".$_SESSION['user']."' ";
          $result = mysqli_query($conn, $sql);
          $result2 = mysqli_query($conn, $sql);

          // echo mysqli_num_rows($result);
          $chats = mysqli_fetch_assoc($result2);
          if ($chats['user1_email'] == $_SESSION['user']) {

            while ($row = mysqli_fetch_assoc($result) ) {

              echo "<div class='themedtextdark'><a href='dashboard.php?convo=".$row['c_id']."&person=".$row['user_name2']."'>".$row['user_name2']."</a></div>";
            }
          }
          else{
            // echo "in else";
            while ($row = mysqli_fetch_assoc($result) ) {
              echo "<div class='themedtextdark'><a href='dashboard.php?convo=".$row['c_id']."&person=".$row['user_name1']."'>".$row['user_name1']."</a></div>";
            }
          }


          ?>

        </div>
        <span  id="logout" class="text-center"><a class="text-danger" href="script_logout.php">Logout</a></span>
        </div>
        <div class="col-sm-8" id="col">
          <div class="chatheader">
            <?php
            if (!isset($idd)) {
              $idd = 0;
            }
            if (isset($_GET['convo']) && isset($_GET['person'])) {
              $user = $_GET['convo'];
              $person = $_GET['person'];
                // echo $user;
              echo "<span id='headertext'>@$person </span>";
            }else{
              $user = 0;
              echo "<span id='headertext'>Select Someone to Chat.</span>";
            }

             ?>

             </div>
             <div class="theconvo" id="theconv">
               <?php
               // echo $_SESSION['user'];
               $user1 = $_SESSION['user'];
               // echo "user 1 ".$user1;
               if (isset($_GET['convo'])) {
                 $user = $_GET['convo'];
                 // echo $user;
                 $sql = "SELECT * FROM chat_details WHERE c_id = '$user' ";

                 $result = mysqli_query($conn, $sql)or die($conn->error);
                 $cunt = mysqli_num_rows($result);
                 // echo $cunt;
                 $id = mysqli_fetch_assoc($result);
                 $idd =$id['c_id'];

                 // echo $idd;

                echo "  <div class='output' id='test'>

                  </div>";
               }
?>
             </div>
             <div class="message text-center">


                 <input type="hidden" name="cid" value="<?php echo $idd ?>">
                 <input type="text" name="msg" autocomplete="off" id="chat" placeholder="Message" value=""><input type="button" onclick="send()" name="" value="Send" id="sendbtn">

             </div>



        </div>

        <div class="col-sm-2">
            <div class="online text-center">
              <span class="themedtext large">Online</span><hr>
              <div class="" id="onlinejs">

              </div>
            </div>
        </div>

      </div>
    </div>
    <script type="text/javascript">
    setInterval(function(){updateonline()},3000);
    setInterval(function(){updatechat()},1000);
    var usermessage = document.getElementById('chat');
    usermessage.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        send();
    }
});
    function test(){



    }
      function updateonline(){
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
              if(this.readyState == 4 && this.status == 200){
                document.getElementById('onlinejs').innerHTML = this.responseText;

              }

            };
            xmlhttp.open("GET", "async_online.php", true);
            xmlhttp.send();
      }
      function updatechat(){
        var user = "<?php echo $user ?>";
        if (user == 0) {
          return;
        }
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
              if(this.readyState == 4 && this.status == 200){

                document.getElementById('test').innerHTML = this.responseText;
                var obj = document.getElementById("test");
                obj.scrollTop = obj.scrollHeight;

              }

            };
            xmlhttp.open("GET", "async_chat.php?user=" + user , true);
            xmlhttp.send();
      }
      function send(){
        var cid = '<?php echo $idd ?>';
        if (cid == 0) {
          return;
        }
        var msg = document.getElementById('chat').value;
        if(msg === ""){
          alert("Cannot Send an Empty Message!");
          return;
        }

        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
              if(this.readyState == 4 && this.status == 200){
                // document.getElementById('test').innerHTML = this.responseText;
                 document.getElementById('chat').value = "";

              } else if ( xmlhttp.status >= 402 && xmlhttp.status <= 420 ) {

                           alert('error');

                        }


            };
            xmlhttp.open("GET", "async_send.php?msg="+ msg + "&cid=" + cid , true);
            xmlhttp.send();
      }

    </script>
  </body>
</html>
