<?php include "../parts/head.php";
head("Rock Climbing Goat - Viking Robotics Society");
include "template.php";
$project_title = "Rock Climbing Goat";
$image = '/projects/images/goat.png';
$links = [
  ["https://github.com/pdx-robotics/RockingClimbingGoat", "Github Repository"]
];
$contributors = [
  "Preston Cazier",
  "Geoffrey Olson",
  "Jake Chung"
];
$status = "Ongoing";
$description = "This is an integration of the Don Quixote Project.";
$milestones = [
  ["Develop walking algorithm for 4 gaited model", "Ongoing"],
  ["Implement navigation and self-balancing",""]
];
generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
include "../parts/footer.html";?>
</body>
</html>
