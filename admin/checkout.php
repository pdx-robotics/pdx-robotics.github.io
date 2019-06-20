<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid black;
};
</style>
<body>
<form method="POST">
  <h2>Checkout Form</h2>
  Name:<br>
  <input type="text" name="name"><br>
  Email:<br>
  <input type="text" name="email"><br>
  Phone:<br>
  <input type="text" name="phone"><br>
  Item:<br>
  <input type="text" name="item"><br>
  <br>
  Return Date<br>
  Month: <input type="text" name="month">
  Day: <input type="text" name="day">
  Year: <input type="text" name="year">
  <input type="submit" value="Submit">
</form>
<?php
$servername = "db.cecs.pdx.edu";
$username = "geoolson";
$password = "g$7Ryxy7ty";

// create a connection
$conn = new mysqli($servername, $username, $password, "geoolson");

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
    $sql = "INSERT INTO checkout VALUE( UUID(), \"" . $name ." \",\" ". $serial ." \", ".$quantity . ",\"\")";
    try{
      $result = mysqli_query($conn, $sql);
    }
    catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}

echo "<br><h2>Items checked out</h2>";
$sql = "SELECT * FROM checkouts";
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
    $row["quantity"]. "<td></td>". 
    $row["Checked Out"]. "</td></tr>";
  }
  echo "</form></table>";
}
?>
</body>
</html>
