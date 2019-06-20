<!DOCTYPE html>
<html>
<body>
<h2>Events</h2>

<!-- form for adding a new event -->
<form method="POST">
  <h2>Append to events</h2>
  Name:<br>
  <input type="text" name="name"><br>
  Term:<br>
  <input type="text" name="term"><br>
  Year:<br>
  <input type="text" name="year"><br>
  Day:<br>
  <input type="text" name="day"><br>
  Time:<br>
  <input type="text" name="time"><br>
  location/room:<br>
  <input type="text" name="room"><br>
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

// handling POST requests
$name = $year = $day = $time = $room = $term = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  // deleting items from the inventory
  if ( $_POST["delete"]) {
    $keys = array_keys($_POST);
    foreach($keys as $entry) {
      $sql = "DELETE FROM events WHERE id=\"" . $entry . "\"";
      $result = mysqli_query($conn, $sql);
    }
  }
  
  // adding an event to events
  else{
    $name = test_input($_POST["id"]);
    $name = test_input($_POST["name"]);
    $year = test_input($_POST["year"]);
    $day = test_input($_POST["day"]);
    $time = test_input($_POST["time"]);
    $room = test_input($_POST["room"]);
    $term = test_input($_POST["term"]);
    $sql = "INSERT INTO events (id, name, year, day, time, room, term) 
    VALUE(UUID(),
    \"" . $name . "\"," . $year . ",\"" .$day . "\",\"" .$time . "\",\"" .$room. "\",\"" .$term. "\")";
    try{
      $result = mysqli_query($conn, $sql);
    }
    catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}

// Table of events
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  echo "
<table>
  <form method='post'>
  <thread>
    <tr>
      <th><input type='submit' value='Delete'></th>
      <th>term</th>
      <th>year</th>
      <th>name</th>
      <th>day</th>
      <th>time</th>
      <th>room</th>
    </tr>
  </thread>";
  echo "<input type='hidden' name='delete' value='true'>"; // allows the page to know of the type of request 
  // building the table with the inventory
  while( $row = mysqli_fetch_assoc($result) ){
    echo 
    "<tr><td><input type ='checkbox' name='". $row["id"]. "'/></td><td>".
    $row["term"] . "</td><td>" . 
    $row["year"]. "</td><td>" . 
    $row["name"]. "</td><td>" . 
    $row["day"]. "</td><td>" . 
    $row["time"]. "</td><td>". 
    $row["room"]. "</td></tr>";
  }
  echo "</form></table>";
}
// end of table of events
?>
</body>
</html>
