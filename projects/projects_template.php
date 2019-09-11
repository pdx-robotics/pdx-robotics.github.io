<?php include "../parts/head.php";
head($title="Insert web-page title here");
include "template.php";

$project_title = "Project title here";
$image = 'images/khr1.png';
$links = [
  ['https://github.com/pdx-robotics/Arduino_KHR-1', 'Name for link here'],
  ['https://github.com/pdx-robotics/KinectKHR1','Name 2 for link here']
];
$contributors = [
  "Name 1",
  "Name 2",
  "Name 3",
  "Name 4",
  "Name 5",
  "Name 6",
	"Name 7"
];
$status = "ongoing";// either Ongoing, Stale or Complete
$description = "
  Place a description here describing the project. 
  Place a description here describing the project. 
  Place a description here describing the project. 
  Place a description here describing the project. 
  Place a description here describing the project. 
  Place a description here describing the project. 
  Place a description here describing the project. 
  Place a description here describing the project. 
";
$milestones = [
  ["Milestone A","Complete"],
  ["Milestone B","In Progress"],
  ["Milestone C",""]
];
generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
?>
<?php include "../parts/footer.php";?>
</body>
</html>
