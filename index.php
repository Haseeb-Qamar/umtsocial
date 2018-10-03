<!DOCTYPE html>
<?php
if (isset($_GET['error'])) {
  $error = $_GET['error'];
}else{
  $error = 0;
}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - UMT | SOCIAL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body onload="check()">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="loginbox text-center">
            <div class="text-center">
              <h3 id="heading">Welcome Back!</h3>
              <span id="uppertext">We are so happy to see you again!</span>
            </div>
            <form class="" action="script_login.php" method="post">
              <input type="text" placeholder="UserName" name="username" autocomplete="off" value=""><br>
              <input type="password" name="password" value="" placeholder="Password"><br>
              <input type="submit" id="btn" name="" value="Login" class="btn btn-dark">
            </form>
            <a href="signup.html">Don't Have an account?</a>
            <br>
<span id="msg" class="text-danger"></span>
          </div>

        </div>
    </div>
    </div>
    <script type="text/javascript">
      function check(){
        var msg = <?php echo $error; ?>;
        if (msg == '1') {
          document.getElementById('msg').innerHTML = "Invalid User Name";
        }

      }
    </script>
  </body>
</html>
