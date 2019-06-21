<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
	<title>Viking Robotics Society -- Portland State University</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="icon" href="/images/vrs_logo_white_icon.png"/> 
</head>

<body class="is-preload">
<?php
include "./parts/header.html";
?>
	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h1>Viking Robotics Society</h1>
			<p>We are the Robotics Club at Portland State University</p>
		</div>
		<video autoplay loop muted playsinline src="/images/banner.mp4"></video>
	</section>

	<!-- Highlights -->
	<section class="wrapper">
		<div class="inner">
			<header class="special">
				<h2>Calendar</h2>
				<iframe src="https://calendar.google.com/calendar/embed?src=pdx.edu_v68cnhjp6329n0o48pqgsiaric%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
			</header>
    </div>
<?php 
$servername = "db.cecs.pdx.edu";
$username = str_replace("\n", "", file_get_contents("./db_credentials/username"));
$password = str_replace("\n", "", file_get_contents("./db_credentials/password"));

// create a connection
$conn = new mysqli($servername, $username, $password, "geoolson");

// check connection
if ($conn->connect_error) {
  die("Connectoin failed: " . $conn->connect_error);
}

// Table of events
echo "<div class='inner'><header class='special'>";
echo "<h2>Events</h2>";
echo "<a href='https://www.when2meet.com/?7898622-Brow2'>Availability Poll</a><br>";
echo "Meetings are held in the Fourth Avenue Building(FAB) basement level on Portland State Campus";
$sql = "SELECT * FROM events WHERE date >= CURDATE() ORDER BY date ASC";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  echo "
<table>
  <thead>
    <tr>
      <th>Term</th>
      <th>Date</th>
      <th>Event</th>
      <th>Time</th>
      <th>Room</th>
    </tr>
  </thead>";
  // building the table with the inventory
  echo "<tbody style='text-align:left;'>";
  while( $row = mysqli_fetch_assoc($result) ){
      $start_time = explode(":", $row["starttime"]);
      if($start_time[0] == "00"){
          $start_time =  "12:" .$start_time[1]. "AM";
      }
      elseif($start_time[0] == "12"){
          $start_time = "12:" .$start_time[1]. "PM";
      }
      elseif(intval($start_time[0]) > 12){
          $start_time = (intval($start_time[0])-12). ":" .$start_time[1]. "PM";
      }
      else{
          $start_time = $start_time[0]. ":" .$start_time[1]. "AM";
      }
      $end_time = explode(":", $row["endtime"]);
      if($end_time[0] == "00"){
          $end_time =  "12:" .$end_time[1]. "AM";
      }
      elseif($end_time[0] == "12"){
          $end_time = "12:" .$end_time[1]. "PM";
      }
      elseif(intval($end_time[0]) > 12){
          $end_time = (intval($end_time[0])-12). ":" .$end_time[1]. "PM";
      }
      else{
          $end_time = $end_time[0]. ":" .$end_time[1]. "AM";
      }
    echo 
    "<tr><td>".
    $row["term"] . "</td><td>" . 
    $row["date"]. "</td><td>" . 
    $row["name"]. "</td><td>" . 
    $start_time. " to " .$end_time. "</td><td>". 
    $row["room"]. "</td></tr>";
  }
  echo "</tbody>";
  echo "</header></div></table>";
}
// end of table of events
?>

		<!-- Scripts -->
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/browser.min.js"></script>
		<script src="/assets/js/breakpoints.min.js"></script>
		<script src="/assets/js/util.js"></script>
		<script src="/assets/js/main.js"></script>
	</section>
	<!-- Footer -->
<?php
include "./parts/footer.html";
?>
</body>
</html>
