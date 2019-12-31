<?php
include "../dbpdo.php";
$username = $_POST['username'];
$password = $_POST['password'];
$data = $_POST['data'];
$attachment = $_POST['attachment'];

$stmt = $pdo->prepare("SELECT admin FROM users WHERE username=? AND password=PASSWORD(?)");
$stmt->execute([$username, $password]);
$result = $stmt->fetchAll();
if(sizeof($result) == 1){
  $result = $result[0];
  if($result['admin'] == 2){
    if(isset($_POST['attachment'])){
      $stmt = $pdo->prepare("INSERT INTO announcements(announcement, attachment) VALUES(?, ?)");
      $stmt->execute([$data, $attachment]);
      echo "recieved attachment and text";
    }
    else{
      $stmt = $pdo->prepare("INSERT INTO announcements(announcement) VALUES(?)");
      $stmt->execute([$data]);
      echo "recieved a text announcement";
    }
  }
  else{
    echo "You do not have administrative privileges";
  }
}
else{
  echo "failure; recieved the following from your request:".PHP_EOL;
  echo $_POST['username'].PHP_EOL;
  echo $_POST['password'].PHP_EOL;
  echo $_POST['data'].PHP_EOL;
}
?>