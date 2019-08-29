<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="icon" href="/images/vrs_logo_white_icon.png"/> 
</head>

<body class="is-preload">
<?php
include "../parts/header.html";
?>
<?php
session_start();
if( isset($_SESSION['credentialCorrect']) and $_SESSION['credentialsCorrect'] == False){
  echo "<font color='red'>incorrect username/password</font>";
}
?>
<form action="/admin/authenticate.php">
  Username:<br>
  <input type="text" name="username" value=""><br>
  Password:<br>
  <input type="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form>
<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/browser.min.js"></script>
<script src="/assets/js/breakpoints.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>
<?php
// footer
include "../parts/footer.html";
?>
</body>
</html>
