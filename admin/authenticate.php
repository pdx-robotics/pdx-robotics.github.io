<?php
session_start();
$user = $_GET["username"];
$user_password = $_GET["password"];

include '../db.php';

// filters the string to prevent sql injections
$user_password = $conn->real_escape_string($user_password);
$user = $conn->real_escape_string($user);

$sql = "SELECT admin FROM users WHERE username='$user' AND password=PASSWORD('$user_password')";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
  if($row['admin'] == 1){
    echo "he be an admin";
    $_SESSION['admin'] = True;
    $_SESSION['credentialCorrect'] = True;
  }
  else{
    $_SESSION['admin'] = False;
    echo "You do not have administrative privileges";
  }
}
else{
  $_SESSION['admin'] = False;
  $_SESSION['credentialCorrect'] = False;
  echo "Incorrect Username/Password";
}
header("Location: http://robotics.ece.pdx.edu/admin/");
exit();
?>
