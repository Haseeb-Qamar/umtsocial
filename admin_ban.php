<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="admin_dash.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="box text-center">
              <h1>Admin Panel</h1>
              <?php
              include "connection.php";
              $sql = "SELECT * FROM users";
              $result = mysqli_query($conn,$sql );
              if ($result == TRUE) {
                echo "<table class='table'>
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
                "</table>";
              }
              else {
                die($conn->error);
              }
               ?>
            </div>
          </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
  </body>
</html>
