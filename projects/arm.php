<?php include "../parts/head.php";
$project_title = "Robot Arm";
head($title= $project_title + " - Viking Robotics Society");
include "template.php";

$image = 'images/robot_arm.jpg';
$links = [
  ['https://github.com/pdx-robotics/Robot-Arm', 'Github - Robot-Arm'],
];
$contributors = [
];
$status = "ongoing";
$description = "";
$milestones = [
  ["Completing the physical assembly of the arm","Ongoing"],
];
generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
?>
<?php include "../parts/footer.php";?>
</body>
</html>
