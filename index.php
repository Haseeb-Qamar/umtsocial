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
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UMT | SOCIAL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="style.css">
  </head>
  <body onload="check()">
    <img src="assets/login_logo2.png" id="loginlogo" alt="">
    <div class="bg" id="bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="loginbox ">
              <div class="text-center">
                <h3 id="heading">Welcome Back!</h3>
                <span id="uppertext">We are so happy to see you again!</span>
              </div>
              <form class="" action="script_login.php" method="post">
                <input type="email" placeholder="Email" name="email" autocomplete="off" value=""><br>
                <input type="password" name="password" value="" placeholder="Password">
                <div class="">
                  <input type="submit" id="btn" name="" value="Login" class="">
                  <span style="color: rgb(114, 137, 218);" id=" ">I am an Admin</span> <input type="checkbox"  name="admincheck" value="admin">
                </div>
              </form>
              <span id="linktext">
                Need an account? <a href="signup.html">Register</a>

              </span>

              <br>
      <span id="msg" class="text-danger">&nbsp</span>
            </div>

          </div>
      </div>
      </div>
    </div>

    <script type="text/javascript">
      function check(){
        var msg = <?php echo $error; ?>;
        if (msg == '1') {
          document.getElementById('msg').innerHTML = "Invalid Email or Password";
        }
        if (msg == '2') {
          document.getElementById('msg').innerHTML = "You are not logged in!";
        }
        if (msg == '3') {
          document.getElementById('msg').innerHTML = "You have been banned from UMT | SOCIAL";
        }
        randomize();
      }
      function randomize(){
        var x = Math.floor((Math.random() * 10) + 1);
        if (x > 5) {
          document.getElementById('bg').style.backgroundImage= "url('assets/bg2.jpg')"
        }else{
document.getElementById('bg').style.backgroundImage= "url('assets/bg3.png')"
        }
      }
    </script>
  </body>
</html>
