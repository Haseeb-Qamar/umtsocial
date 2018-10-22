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
    background: #2F3136;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #202225;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>
  </head>
  <body onload="test()">

    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: rgb(40, 43, 48);">
        <a class="navbar-brand" href="#">
            <img src="assets/logo.png" width="30" height="30" alt="">
          </a>
    <a class="navbar-brand" href="dashboard.php">UMT | SOCIAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link " href="explore.php">Explore <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link " href="settings.php">Settings <span class="sr-only">(current)</span></a>

      </div>
    </div>
    </nav>
      <div class="row">

<!-- Servers Section -->
        <div class="col-sm-1">
          <div class="servers text-center">
            <span class="themedtext large">Servers</span>
            <hr>
            <?php
            $query = "SELECT * FROM server_members WHERE user_id='".$_SESSION['user']."'";
            $getservermembers = mysqli_query($conn, $query) or die($conn->error);
            while ($row = mysqli_fetch_assoc($getservermembers)) {
            echo "<div id='servers' class='themedtextdark'><a href='dashboard.php?server_convo=".$row['server_id']."&server_name=".$row['server_name']."'>".$row['server_name']."</a></div>";
            }

             ?>

          </div>
          <?php
          if (isset($_GET['server_convo'])) {
            $sid = $_GET['server_convo'];
            echo
            "<div class='server_members text-center'>
            <span class='themedtext large'>Members</span>";
            $sql = "SELECT * FROM server_members WHERE server_id ='$sid'";
            $result = mysqli_query($conn, $sql);
            if ($result == TRUE) {
              while ($row = mysqli_fetch_assoc($result)) {
                // code...
                echo "
                <div class='server_member_name'>".$row['user_name']."</div>
                ";
              }
            }
            echo "</div>";
          }
           ?>

        </div>
        <!-- User Chats Section -->
        <div class="col-sm-2">
        <div class="onlinecol text-center">
        <span class="themedtext large">People</span>
        <hr>
        <?php
        $sql = "SELECT username,email FROM users";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result) ) {
          if ($row['email'] == $_SESSION['user']) {
            continue;
          }
          echo "<div class='themedtextdark'>
          <a href='script_startchat.php?usermail=".$row['email']."&username=".$row['username']."'>
          ".$row['username']."
          </a>
          </div>";
        }

        ?>

        </div>
        <div class="userchats text-center">
          <span class="themedtextdark large">Chats</span>
          <hr>
          <?php

          $sql = "SELECT * FROM chat WHERE user1_email = '".$_SESSION['user']."' OR user2_email = '".$_SESSION['user']."' ";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['user1_email'] == $_SESSION['user']) {
              echo "<div class='themedtextdark'><a href='dashboard.php?convo=".$row['c_id']."&person=".$row['user_name2']."'>".$row['user_name2']."</a></div>";
            }
            if ($row['user2_email'] == $_SESSION['user']) {
              echo "<div class='themedtextdark'><a href='dashboard.php?convo=".$row['c_id']."&person=".$row['user_name1']."'>".$row['user_name1']."</a></div>";
            }
          }


          ?>

        </div>

        </div>
        <!-- Conversation Section -->
        <div class="col-sm-7" id="col">
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
            }elseif(isset($_GET['server_convo'])){
              $serverid = $_GET['server_convo'];
              echo "@".$_GET['server_name'];
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
                 $serverConvo = 0;
                 $serverid = 0;
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
               }elseif(isset($_GET['server_convo'])){
                 $user = 0;
                 $serverConvo = 1;
                 $serverid = $_GET['server_convo'];
                 echo "<div id='test'></div>";


               }else{
                 $user = 0;
                 $serverConvo = 0;
                 $serverid = 0;
                 echo "<div class='text-center' id='headertext'>Your Chat Will Appear Here.<br>Select a conversation to chat<br><img id='emptyicon' src='assets/login_logo2.png'></div>";
                 echo "";
               }
?>
             </div>
             <div class="message text-center">


                 <input type="hidden" name="cid" value="<?php echo $idd ?>">
                 <input type="text" name="msg" autocomplete="off" id="chat" placeholder="Message " value="">

             </div>



        </div>

        <div class="col-sm-2">
            <div class="online text-center">
              <span class="themedtext large">Online</span><hr>
              <div class="" id="onlinejs">

              </div>

            </div>
            <div class="userinfo">

              <span id="user" class="loggedin"><?php echo $_SESSION['username'] ?></span>
              <span id="email" class="loggedin"><?php echo $_SESSION['user'] ?></span>
              <a class="text-danger" href="script_logout.php"><span  id="logout" class="text-center">Logout</span></a>
            </div>
        </div>

      </div>
    </div>
    <script type="text/javascript">
    window.onbeforeunload= function(){
      window.Location.href = "script_logout.php";
    };
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
        var server_id = <?php echo $serverConvo ?>;
        if (user == 0 && server_id == 0) {
          return;
        }
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
              if(this.readyState == 4 && this.status == 200){

                document.getElementById('test').innerHTML = this.responseText;
                // var obj = document.getElementById("test");
                // obj.scrollTop = obj.scrollHeight;

              }

            };
            if (server_id == 1) {
              var serverid = '<?php echo $serverid ?>';
              xmlhttp.open("GET", "async_server_chat.php?sid=" + serverid , true);
              xmlhttp.send();
            }
            else{

              xmlhttp.open("GET", "async_chat.php?user=" + user , true);
              xmlhttp.send();
            }
      }
      function send(){
        var cid = '<?php echo $idd ?>';
        var server_id = <?php echo $serverConvo ?>;
        // document.write(server_id);
        if (cid == 0 && server_id == 0) {
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

              }

            };
            if (server_id == 1) {
              var serverid = '<?php echo $serverid ?>';
              // document.write('sedning fir server');
              xmlhttp.open("GET", "async_send_server.php?msg="+ msg + "&sid=" + serverid , true);
              xmlhttp.send();
          }else{
            xmlhttp.open("GET", "async_send.php?msg="+ msg + "&cid=" + cid , true);
            xmlhttp.send();
          }


      }

    </script>
  </body>
</html>
