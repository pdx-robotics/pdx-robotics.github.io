<?php include '../parts/head.php';
head($title='Bubblebee - Viking Robotics Society');
include 'template.php';
$project_title = 'Bicopter Drone - bubblebee';
$image = 'images/bumblebee.jpg';
$links = [
  ['https://github.com/pdx-robotics/bicopter-drone', 'Github Repository']
];
$contributors = [
  "Giando Sigurani",
  "Weiting Duan",
  "Jake Chung",
  "John Egal"
];
$status = "Ongoing";
$description = "This is one of the integrations for the Don Quixote project aiming to combine flight and water travel. The bicopter is a two-rotor flying machine that will pivot its propellers vertically for flight or horizontally for water travel. There has been a successful Chinook bicopter of a similar design but we are taking it a step further by implementing underwater functionality to it.";
$milestones = [
  ["Design custom frame and construct the bicopter","Ongoing"],
  ["Get bicopter to fly reliably",""],
];
generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
include "../parts/footer.html";?>
</body>
</html>
