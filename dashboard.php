<?php session_start();
if (!isset($_SESSION['user'])) {
    header("Location:index.php?error=2");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - UMT | SOCIAL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="dashboard.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
        <div class="onlinecol text-center">
        online
        </div>
        </div>
        <div class="col-sm-8">chat</div>
        <div class="col-sm-2">chat</div>

      </div>
    </div>
  </body>
</html>
