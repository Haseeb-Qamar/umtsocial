<?php
include "connection.php";
session_start();
$id =$_SESSION["user"];
$sql = "DELETE FROM online WHERE email='$id' ";
$result = mysqli_query($conn,$sql) or  die($conn->error);
session_destroy();
header("Location:index.php");

 ?>
