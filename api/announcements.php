<?php
include '../db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = $_POST['data'];
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);
$data = $conn->real_escape_string($data);

$sql = "SELECT admin FROM users WHERE username='$username' AND password=PASSWORD('$password')";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
  if($row['admin'] == 2){
    echo "he be an admin";
    $_SESSION['admin'] = True;
    $_SESSION['credentialCorrect'] = True;
    $sql = "INSERT INTO announcements(announcement) VALUES('$data')";
    $result = mysqli_query($conn, $sql);
  }
  else{
    $_SESSION['admin'] = False;
    echo "You do not have administrative privileges";
  }
}
else{
    echo $_POST['username'].PHP_EOL;
    echo $_POST['password'].PHP_EOL;
    echo $_POST['data'].PHP_EOL;
    echo array_keys($_POST);
}
?>