<?php include "../parts/head.php"; 
head("Custom ESC - Viking Robotics Society");
include "template.php";
$project_title = "Custom ESC";
$image = 'images/esc.png';
$links = [
  ["https://github.com/pdx-robotics/ElectricSpeedController", "Github Repository"]
];
$contributors = [
  "Preston Cazier",
  "Ian Eykamp",
  "Eric Ruhl"
];
$status = "Ongoing";
$description = "This will be a variable ESC so that it's compatible with multiple types of motors. Our main usage for this is to test motors and propellers underwater and adjust controls for desired performance.";
$milestones = [
  ["Design and verify circuit design for ESC", "Ongoing"],
  ["Build and test ESC", ""]
];
generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
include "../parts/footer.php";?>
</body>
</html>
