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
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: rgb(40, 43, 48);">
  <a class="navbar-brand" href="#">UMT | SOCIAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Dashboard <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Settings <span class="sr-only">(current)</span></a>

    </div>
  </div>
</nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
        <div class="onlinecol text-center">
        <span class="themedtext large">People</span>
        <hr>
        <?php

        $sql = "SELECT username FROM users";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result) ) {
          echo "<div class='themedtextdark'><a href='dashboard.php?convo=".$row['username']."'>".$row['username']."</a></div>";
        }

        ?>
        <span  id="logout"><a class="text-danger" href="script_logout.php">Logout</a></span>
        </div>
        </div>
        <div class="col-sm-8">
          <div class="chatheader">
            <?php
            if (isset($_GET['convo'])) {
              $user = $_GET['convo'];
              echo "<span id='headertext'>@$user </span>";
            }else{
              echo "<span id='headertext'>Select Someone to Chat.</span>";
            }

             ?>

             </div>
             <div class="theconvo">
               <?php
               $sql = "";
                ?>
             </div>
             <div class="message text-center">
               <hr>
               <input type="text" name="" placeholder="Message" value=""><input type="button" name="" value="Send">
             </div>



        </div>
        <div class="col-sm-2">
            <div class="online text-center">
              <span class="themedtext large">Online</span><hr>
              <?php

              $sql = "SELECT username FROM online";
                $result = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div>".$row['username']."</div>";
                  }
                }else echo "<div>No One Online</div>";

               ?>
            </div>
        </div>

      </div>
    </div>
  </body>
</html>
