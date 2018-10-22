<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="admin_dash.css">
  </head>
  <body>
    <div class="bg">
      <div class="logout">
        <a href="index.php" title="Logout"><i class="fas fa-sign-out-alt fa-2x"></i></a>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="box text-center">
              <h1><a href="admin_dash.php">Admin Panel</a></h1>
              <?php
              include "connection.php";
              $sql = "SELECT * FROM users";
              $result = mysqli_query($conn,$sql );

              if ($result == TRUE) {
                echo "<div class='tablebg'><table class='table'>
                <tr><th>Email</th><th>User Name</th><th>User Status</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr>
                  <td>"
                  .$row['email']."</td><td>"
                  .$row['username']."</td><td><a href='script_ban.php?email=".$row['email']."&status=".$row['status']."'>"
                  .$row['status']."</a></td>
                  </tr>"

                  ;


                }
                "</table></div>";
              }
              else {
                die($conn->error);
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

    </script>
  </body>
</html>
