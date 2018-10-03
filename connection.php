<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','root','haseeb','umtsocial');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
