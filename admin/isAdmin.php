<?php
session_start();
$set = isset($_SESSION['admin']);
if($set and $_SESSION['admin']){}
else{
  header("Location: http://robotics.ece.pdx.edu/admin/login.php");
  exit();
}
?>
