<?php include "../isAdmin.php";
include "../../parts/head.php";
head('inventory');
?>
<style>
table, th, td {
  border: 1px solid black;
};
</style>
<section class="wrapper">
  <div class="inner">
    <header class="special">
      <form method="POST">
        <h2>Append to inventory</h2>
        <div class="row gtr-uniform">
          <div class="col-6 col-12-small">
            Name:<br>
            <input type="text" name="name">
            Serial:<br>
            <input type="text" name="serial"><br>
          </div>
          <div class="col-6 col-12-small">
            Notes :<br>
            <input type="text" name="notes">
            Quantity:<br>
            <input type="text" name="quantity"><br>
          </div>
        </div>
        <input type="submit" value="Submit">
      </form>
    </header>
  </div>
<?php
include '../../db.php';

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

$sql = "SELECT * FROM inventory";
$result = mysqli_query($conn, $sql);
?>
  <div class="inner">
    <header class="special">
      <hr><h2>Inventory</h2>
      <style>
        .ignore-css{all:unset;}
      </style>
<?php
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
    '
    <tr><td>
      <div class="col-6 col-12-small">
        <input type="checkbox" id="'.$row['id'].'" name="'.$row['id'].'">
        <label for="'.$row['id'].'"></label>
      </div>
    </td><td>'.


    $row["name"] . "</td><td>" . 
    $row["serialnum"]. "</td><td>" . 
    $row["notes"]. "</td><td>" . 
    $row["quantity"]. "<td></td>". 
    $row["Checked Out"]. "</td></tr>";
  }
  echo "</form></table>";
}
?>
    </header>
  </div>
</section>
<?php include '../../parts/footer.html'; ?>
</body>
</html>
