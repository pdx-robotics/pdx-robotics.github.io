<?php include "../parts/head.php";
head("Tank 70108 - Viking Robotics Society"); 
include "template.php";

$project_title = "tamiya tank control - tank 70108";
$image = 'images/tank70108.png';
$links = [
  ['https://github.com/pdx-robotics/Tank-70108', 'Github Repository'],
];
$contributors = [
  "Aaron Chan",
  "Jake Chung",
  "Philip Proctor"
];
$status = "ongoing";
$description = "This project is meant to be a simple introduction to robotics. Using an Arduino-based control system with a bluetooth module, we can teach programming and circuit basics to people new to engineering and robotics. It uses a vehicle chassis kit made by Tamiya that has tank treads on both sides of a wood plank. We have also used an upgrade kit that provides two motor gearboxes for individual control of each tread.";
$milestones = [
  ["Controlled Movement with Arduino","Complete"],
  ["Wireless Control with Bluetooth & App","Complete"],
  ["Make tutorial as Introduction to Robotics for new members","Ongoing"]
];
generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
include "../parts/footer.html";?>
</body>
</html>
