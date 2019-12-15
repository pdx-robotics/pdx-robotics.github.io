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
$name = urldecode($_POST['name']);
$project_name = urldecode($_POST['project_name']);
if($action === "add"){
  $stmt = $pdo->prepare("INSERT INTO project_contributors(project_name, name) VALUES(?,?)");
  $stmt->execute([$project_name, $name]);
  echo 'added '.$name.' to project: '.$project_name;
}
elseif($action === "delete"){
  $stmt = $pdo->prepare("DELETE FROM project_contributors WHERE project_name=? AND name=?");
  $stmt->execute([$project_name, $name]);
  echo 'Removed '.$name.' from project: '.$project_name;
}
else{
  echo 'error';
  var_dump($_POST);
}
?>
