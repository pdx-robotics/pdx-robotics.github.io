<?php include "isAdmin.php";?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid black;
};
</style>
<body>
<?php
include "header.html";
?>
<h2>Events</h2>

<!-- form for adding a new event -->
<form method="POST">
  <h2>Append to events</h2>
  Name:<br>
  <input type="text" name="name"><br>
  Term:
  <select name="term">
    <option>- Term -</option>
    <option value="Fall">Fall</option>
    <option value="Winter">Winter</option>
    <option value="Spring">Spring</option>
    <option value="Summer">Summer</option>
  </select><br>
  Year:
  <select name="year">
    <option>- Year -</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
  </select><br>
  Month:
  <select name="month">
    <option>- Month -</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
  </select><br>
  Day:
  <select name="day">
    <option>- Day -</option>
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    <option value="05">5</option>
    <option value="06">6</option>
    <option value="07">7</option>
    <option value="08">8</option>
    <option value="09">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
   </select><br>
  Start Time:
  <select name="hour">
    <option>- Hour -</option>
    <option value="00">12 AM</option>
    <option value="01">1 AM</option>
    <option value="02">2 AM</option>
    <option value="03">3 AM</option>
    <option value="04">4 AM</option>
    <option value="05">5 AM</option>
    <option value="06">6 AM</option>
    <option value="07">7 AM</option>
    <option value="08">8 AM</option>
    <option value="09">9 AM</option>
    <option value="10">10 AM</option>
    <option value="11">11 AM</option>
    <option value="12">12 PM</option>
    <option value="13">1 PM</option>
    <option value="14">2 PM</option>
    <option value="15">3 PM</option>
    <option value="16">4 PM</option>
    <option value="17">5 PM</option>
    <option value="18">6 PM</option>
    <option value="19">7 PM</option>
    <option value="20">8 PM</option>
    <option value="21">9 PM</option>
    <option value="22">10 PM</option>
    <option value="23">11 PM</option>
  </select>
  <select name="minutes">
    <option>- Minutes -</option>
    <option value="00">00</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
  </select><br>
  End Time:
  <select name="endhour">
    <option>- Hour -</option>
    <option value="00">12 AM</option>
    <option value="01">1 AM</option>
    <option value="02">2 AM</option>
    <option value="03">3 AM</option>
    <option value="04">4 AM</option>
    <option value="05">5 AM</option>
    <option value="06">6 AM</option>
    <option value="07">7 AM</option>
    <option value="08">8 AM</option>
    <option value="09">9 AM</option>
    <option value="10">10 AM</option>
    <option value="11">11 AM</option>
    <option value="12">12 PM</option>
    <option value="13">1 PM</option>
    <option value="14">2 PM</option>
    <option value="15">3 PM</option>
    <option value="16">4 PM</option>
    <option value="17">5 PM</option>
    <option value="18">6 PM</option>
    <option value="19">7 PM</option>
    <option value="20">8 PM</option>
    <option value="21">9 PM</option>
    <option value="22">10 PM</option>
    <option value="23">11 PM</option>
  </select>
  <select name="endminutes">
    <option>- Minutes -</option>
    <option value="00">00</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
  </select><br>
  location/room:<br>
  <input type="text" name="room"><br>
  <input type="submit" value="Submit">
</form>
<br>
<?php
$servername = "db.cecs.pdx.edu";
$username = str_replace("\n", "", file_get_contents("../db_credentials/username"));
$password = str_replace("\n", "", file_get_contents("../db_credentials/password"));

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

// handling POST requests
$name = $date = $starttime = $endtime = $room = $term = "";
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
    $name = test_input($_POST["name"]);
    $date = test_input($_POST["year"]). "-" .test_input($_POST["month"]). "-" .test_input($_POST["day"]);
    $starttime = test_input($_POST["hour"]). ":" .test_input($_POST["minutes"]). ":00";
    $endtime = test_input($_POST["endhour"]). ":" .test_input($_POST["endminutes"]). ":00";
    $room = test_input($_POST["room"]);
    $term = test_input($_POST["term"]);
    $sql = "INSERT INTO events (id, name, date, starttime, endtime, room, term) 
    VALUE(UUID(),
        \"" .$name. "\",
        \"" .$date. "\",
        \"" .$starttime. "\",
        \"" .$endtime. "\",
        \"" .$room. "\",
        \"" .$term. "\")";
    try{
      $result = mysqli_query($conn, $sql);
    }
    catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}

// Table of events
echo "<hr><h2>Table of Events</h2>";
$sql = "SELECT * FROM events ORDER BY date DESC";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  echo "
<table>
  <form method='post'>
  <thead>
    <tr>
      <th><input type='submit' value='Delete'></th>
      <th>term</th>
      <th>date</th>
      <th>name</th>
      <th>start time</th>
      <th>end time</th>
      <th>room</th>
    </tr>
  </thead>";
  echo "<input type='hidden' name='delete' value='true'>"; // allows the page to know of the type of request 
  // building the table with the inventory
  while( $row = mysqli_fetch_assoc($result) ){
    echo 
    "<tr><td><input type ='checkbox' name='". $row["id"]. "'/></td><td>".
    $row["term"] . "</td><td>" . 
    $row["date"]. "</td><td>" . 
    $row["name"]. "</td><td>" . 
    $row["starttime"]. "</td><td>". 
    $row["endtime"]. "</td><td>". 
    $row["room"]. "</td></tr>";
  }
  echo "</form></table>";
}
// end of table of events
?>
</body>
</html>
