<?php
include "../../dbpdo.php";
include "token.php";
session_start();
$set = isset($_SESSION['admin']);
if($set and $_SESSION['admin'] != 1){
  if(strcmp($_POST['token'], $token) !== 0){
    echo 'invalid token';
    exit();
  }
}
$action = $_POST['action'];
$desc = urldecode($_POST['description']);
$project_name = urldecode($_POST['project_name']);
if($action === 'update'){
  $stmt = $pdo->prepare("UPDATE projects SET description=? WHERE name=?");
  $stmt->execute([$desc, $project_name]);
  echo 'updated project description for '.$project_name;
}
?>
