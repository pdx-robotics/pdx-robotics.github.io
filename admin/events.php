<!DOCTYPE html>
<html>
<body>
<h2>Events</h2>
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
    $row["day"]. "</td><td>" . 
    $row["time"]. "</td><td>". 
    $row["room"]. "</td></tr>";
  }
  echo "</form></table>";
}
?>
</body>
</html>
