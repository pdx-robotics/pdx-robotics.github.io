<?php
session_start();
$set = isset($_SESSION['admin']);
$isAdmin = False;
if($set and $_SESSION['admin'] == 1)
  $isAdmin = True;
?>
