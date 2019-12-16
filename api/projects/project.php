<?php
include "../../dbpdo.php";
include "token.php";
session_start();
$set = isset($_SESSION['admin']);
if(!$set){
  if(strcmp($_POST['token'], $token) !== 0){
    echo 'invalid token';
    exit();
  }
}
if($_SESSION['admin'] != 1)
  exit();
$action = $_POST['action'];
$name = urldecode($_POST['name']);
$image = urldecode($_POST['image']);
$status = intval($_POST['status']);
$description = urldecode($_POST['description']);
if($action === "add"){
  $stmt = $pdo->prepare("INSERT INTO projects(name, image, status, description) VALUES(?,?,?,?)");
  $stmt->execute([$name, $image, $status, $description]);
  echo 'added project '.$name;
}
else{
  echo 'error';
}
?>
