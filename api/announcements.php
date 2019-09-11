<?php
include '../db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = $_POST['data'];
$attachment = $_POST['attachment'];
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);
$data = $conn->real_escape_string($data);
$attachment = $conn->real_escape_string($attachment);

$sql = "SELECT admin FROM users WHERE username='$username' AND password=PASSWORD('$password')";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
  if($row['admin'] == 2){
    $_SESSION['admin'] = True;
    $_SESSION['credentialCorrect'] = True;
    if(isset($_POST['attachment'])){
      $sql = "INSERT INTO announcements(announcement, attachment) VALUES('$data', '$attachment')";
      echo "recieved attachment and text";
    }
    else{
      $sql = "INSERT INTO announcements(announcement) VALUES('$data')";
      echo "recieved a text announcement";
    }
    $result = mysqli_query($conn, $sql);
  }
  else{
    $_SESSION['admin'] = False;
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