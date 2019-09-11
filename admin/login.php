<?php
include "../parts/head.php";
  head($title='Login');
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
<?php include "../parts/footer.php"; ?>
</body>
</html>
