<?php include "../parts/head.php";
if(!empty($_GET['name'])){
  include "../dbpdo.php";
  $name = urldecode($_GET['name']);
  $stmt = $pdo->prepare("SELECT * FROM `projects` WHERE name=?");
  $stmt->execute([$name]);
  $results = $stmt->fetch(PDO::FETCH_ASSOC);
  if(sizeof($results) == 4){
    $project_title = $results['name'];
    $image = 'images/'.$results['image'];
    $status = $results['status'];
    $description = $results['description'];
  }
  $stmt = $pdo->prepare("SELECT name FROM `project_contributors` WHERE project_name=?");
  $stmt->execute([$name]);
  $contributors = $stmt->fetchAll(PDO::FETCH_COLUMN);
  $stmt = $pdo->prepare("SELECT link, link_title FROM `project_links` WHERE project_name=?");
  $stmt->execute([$name]);
  $links = $stmt->fetchAll(PDO::FETCH_NUM);
  $stmt = $pdo->prepare("SELECT milestone, status FROM `project_milestones` WHERE project_name=?");
  $stmt->execute([$name]);
  $milestones = $stmt->fetchAll(PDO::FETCH_NUM);
  include "template.php";
  generate($project_title, $image, $links, $contributors, $status, $description, $milestones);
}
else{
  $name='Projects Index';
?>
	<section class="wrapper">
	<div class="inner">

		<h2>Projects Index</h2>
		<ul>
			<li><a href="bubblebee.php">Bicopter Drone - Bubblebee</a></li>
			<li><a href="custom_esc.php">Custom ESC</a></li>
			<li><a href="index.php?name=Humanoid%20Robot%20KHR-1">Humanoid Robot KHR-1</a></li>
			<li><a href="goat.php">Rock Climbing Goat</a></li>
			<li><a href="tank70108.php">Tamiya Tank Control - Tank 70108</a></li>
			<li><a href="arm.php">Robot Arm</a></li>
		</ul>
	</div>
	</section>
<?php
}
head($title = $name." - Viking Robotics Society");
include "../parts/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="admin.js"></script>
</body>
</html>
