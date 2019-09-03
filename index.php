<?php include "./parts/head.php";
  head($title='Viking Robotics Society -- Portland State University');
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
include './db.php';

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
include "./parts/footer.html";
?>
</body>
</html>
