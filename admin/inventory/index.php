<?php include "../isAdmin.php";?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid black;
};
</style>
<body>
<?php
include "../header.html";
?>
<form method="POST">
  <h2>Append to inventory</h2>
  Name:<br>
  <input type="text" name="name"><br>
  Serial:<br>
  <input type="text" name="serial"><br>
  Notes :<br>
  <input type="text" name="notes"><br>
  Quantity:<br>
  <input type="text" name="quantity"><br>
  <input type="submit" value="Submit">
</form>
<?php
$servername = "db.cecs.pdx.edu";
$username = str_replace("\n", "", file_get_contents("../../db_credentials/username"));
$password = str_replace("\n", "", file_get_contents("../../db_credentials/password"));

// create a connection
$conn = new mysqli($servername, $username, $password, $username);

// check connection
if ($conn->connect_error) {
  die("Connectoin failed: " . $conn->connect_error);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name = $serial = $quantity = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // deleting items from the inventory
  if ( $_POST["delete"]) {
    $keys = array_keys($_POST);
    foreach($keys as $entry) {
      $sql = "DELETE FROM inventory WHERE id=\"" . $entry . "\"";
      $result = mysqli_query($conn, $sql);
    }
  }

  // adding an item to the inventory
  else{
    $name = test_input($_POST["name"]);
    $serial = test_input($_POST["serial"]);
    $quantity = test_input($_POST["quantity"]);
    $notes = test_input($_POST["notes"]);
    $sql = "INSERT INTO inventory (id, name, serialnum, quantity, notes) 
    VALUE( UUID(), 
    \"" . $name . "\",\"" . $serial . "\", " .$quantity . ",\"" .$notes. "\")";
    try{
      $result = mysqli_query($conn, $sql);
    }
    catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}

echo "<br><hr><h2>Inventory</h2>";
$sql = "SELECT * FROM inventory";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  echo "
<table>
  <form method='post'>
  <thread>
    <tr>
      <th><input type='submit' value='Delete'></th>
      <th>name</th>
      <th>serial number</th>
      <th>notes</th>
      <th>quantity</th>
      <th>Checked out</th>
    </tr>
  </thread>";
  echo "<input type='hidden' name='delete' value='true'>"; // allows the page to know of the type of request 
  // building the table with the inventory
  while( $row = mysqli_fetch_assoc($result) ){
    echo 
    "<tr><td><input type ='checkbox' name='". $row["id"]. "'/></td><td>".
    $row["name"] . "</td><td>" . 
    $row["serialnum"]. "</td><td>" . 
    $row["notes"]. "</td><td>" . 
    $row["quantity"]. "<td></td>". 
    $row["Checked Out"]. "</td></tr>";
  }
  echo "</form></table>";
}
?>
</body>
</html>
