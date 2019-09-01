<?php
session_start();
$set = isset($_SESSION['admin']);
if($set and $_SESSION['admin']){
  session_destroy();
}
header("Location: http://robotics.ece.pdx.edu/");
exit();
?>
