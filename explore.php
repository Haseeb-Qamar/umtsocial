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
        <a class="nav-item nav-link active" href="explore.php">Explore <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link " href="settings.php">Settings <span class="sr-only">(current)</span></a>

      </div>
    </div>
    </nav>
      <div class="row">
        <div class="col-sm-12">
          <div class="explorebox text-center">
            <button type="button" onclick="showsearch(this.value)" value="people" name="button">Search People</button>
<button type="button" onclick="showsearch(this.value)" value="servers" name="button">Search Servers</button>
            <div class="" id="peoplesearch" style="display:none;">
              <span class="headers ">Search People</span>
              <input type="text" onkeyup="getusers(this.value)" name="" value="">
            </div>

            <div class="" id="serversearch" style="display:none;">
              <span class="headers ">Search Servers</span>
              <input type="text" onkeyup="getservers(this.value)" name="" value="">
            </div>

          </div>
          <div class="resultbox">
            <div class="" id="async">

            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
    function showsearch(x){
      var peoples = document.getElementById('peoplesearch');
      var servers = document.getElementById('serversearch');
      if (x == 'people') {
        servers.style.display = "none";
         peoples.style.display = "block";
      }else if (x == 'servers') {
        peoples.style.display = "none";
         servers.style.display = "block";
      }else{

      }

    }
    function getusers(x){
      var async_tab = document.getElementById('async');
      if(x == ''){
        async_tab.style.display = "none";
        return;
      }else{
async_tab.style.display = "inherit";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById('async').innerHTML = this.responseText;

          }

        };
        xmlhttp.open("GET", "async_getusers.php?q=" + x, true);
        xmlhttp.send();
      }
    }
    function getservers(x){
      var async_tab = document.getElementById('async');
      if(x == ''){
        async_tab.style.display = "none";
        return;
      }else{
async_tab.style.display = "inherit";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById('async').innerHTML = this.responseText;

          }

        };
        xmlhttp.open("GET", "async_getservers.php?q=" + x, true);
        xmlhttp.send();
      }
    }
    </script>
  </body>
</html>
