<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_dash.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
              <h1>Admin Panel</h1>
              <input type="button" class="btn btn-primary" name="ban" onclick="redirect(this.name)" value="Ban User">
              <input type="button" class="btn btn-primary" name="createserver" onclick="redirect(this.name)" value="Create Server">
              <input type="button" class="btn btn-primary" name="addmember" onclick="redirect(this.name)" value="Add Members">
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    function redirect(name){

      if (name=='ban') {
window.location="admin_ban.php";
      }
      else if (name == 'createserver') {
window.location="admin_create_server.php";
}else if (name == 'addmember') {
window.location="admin_add_member.php";
      }


    }
    </script>
  </body>
</html>
