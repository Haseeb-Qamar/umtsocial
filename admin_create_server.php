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
              <form class="" action="script_create_server.php" method="post">
                <div class="serverfields">

                  <input placeholder="Server Name" type="text" name="server_name" value=""><br>
                  <textarea rows="5" cols="70" name="server_desc" placeholder="Enter Server Description"></textarea><br><br>
                  <input type="submit" class="btn btn-success" name="" value="Create Server">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">


    }
    </script>
  </body>
</html>
