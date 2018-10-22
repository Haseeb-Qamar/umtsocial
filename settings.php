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
  <body>

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
        <a class="nav-item nav-link " href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link " href="explore.php">Explore <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="settings.php">Settings <span class="sr-only">(current)</span></a>

      </div>
    </div>
    </nav>
      <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-2">
<div class="usersettings text-center">
User Settings
<span class="settingoptions"><a href="settings.php?id=<?php echo $_SESSION['user'] ?>">My Account</a></span>
</div>
        </div>
        <div class="col-sm-8">
          <div class="colcontainer">

            <div class="userdetails">
              My Account
              <div class="userdata">
                <span onclick="turnon()" class="editbtn">Edit</span>
                <?php

                $sql = "SELECT * FROM users WHERE email = '".$_SESSION['user']."'";
                $query = mysqli_query($conn,$sql) or die($conn->error);
                if ($query == TRUE) {

                  while ($row = mysqli_fetch_assoc($query)) {
                    echo "
                    <div >
                    <span class='textholders'>User Name:<br><span class='textdetails'><input id='edituser' type='text' disabled value='".$row['username']."'></span></span><br>

                    <span class='textholders'>Email:<br><span class='textdetails'><input type='text' disabled value='".$row['email']."'></span></span>

                    </div>
                    ";
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
    function turnon(){
      var field = document.getElementById('edituser');
      field.disabled =  false;
      field.focus();
    }

    </script>
  </body>
</html>
