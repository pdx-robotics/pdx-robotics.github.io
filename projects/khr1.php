<?php include "../parts/head.php";
head($title="KHR-1 - Viking Robotics Society");
include "template.php";

$project_title = "Humanoid Robot KHR-1";
$image = 'images/khr1.png';
$links = [
  ['https://github.com/pdx-robotics/Arduino_KHR-1', 'Github - Arduino KHR-1'],
  ['https://github.com/pdx-robotics/KinectKHR1','Github - Kinect KHR-1']
];
$contributors = [
  "Aaron Chana",
  "Jake Chung",
  "Ha Ly",
  "William Brines",
  "Ian Eykamp",
  "Jordan Bergmann",
	"Geoffrey Olson"
];
$status = "ongoing";
$description = "
        The Humanoid Robot KHR-1 was made by Kondo Kagaku (近藤科学) and introduced in 2004.  
    	We have changed the control method to an Arduino-based system so that it is portable and works with the Kinect camera. 
	    By interfacing with Kinect, it is both a fun, interactive demo and a stepping stone towards more complex Kinect-driven projects and machine learning.
";
$milestones = [
  ["Flag Semaphore to fix and test hardware","Complete"],
  ["Interface with Kinect camera to copy arm movements","Complete"],
  ["Implement a Walking Algorithm",""]
];
generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
?>
<?php include "../parts/footer.html";?>
</body>
</html>
