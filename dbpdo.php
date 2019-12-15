<?php
$servername = "db.cecs.pdx.edu";
if(isset($_SESSION['db_username'])){
    $username = $_SESSION['db_username'];
    $password = $_SESSION['db_password'];
}else{
    $username = $_SESSION['db_username'] = str_replace("\n", "", file_get_contents($_SERVER['DOCUMENT_ROOT']."/db_credentials/username"));
    $password = $_SESSION['db_password'] = str_replace("\n", "", file_get_contents($_SERVER['DOCUMENT_ROOT']."/db_credentials/password"));
}

// create a connection
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
}
catch (Exception $e) {
  error_log($e->getMessage());
}
?>
