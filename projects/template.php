<?php
function generate($project_title, $image, $links, $contributors, $status, $description, $milestones){
  function mapStatus($status){
    if($status === '0')
      return "";
    elseif($status === '1')
      return "Ongoing";
    elseif($status === '2')
      return "Complete";
    else
      return $status;
  }
  function adminContributors(){
    include "../api/isAdmin.php";
    if(!$isAdmin)
      return '';
    return '<button onclick="controller.remove()" class="button small">Remove</button>'.
      '<button onclick="controller.add()" class="button small">Add</button>';
  }
  function adminDescription(){
    include "../api/isAdmin.php";
    if(!$isAdmin)
      return '';
    return '<button onclick="controller.editDesc()" class="button small">Edit</button>';
  }
  function adminMilestone(){
    include "../api/isAdmin.php";
    if(!$isAdmin)
      return '';
    return '<button onclick="" class="button small">Remove</button>'.
      '<button onclick="" class="button small">Add</button>';
  }
?>
<section class="wrapper">
<div class="inner">
<h1><?php echo $project_title ?></h1>
    <div class="row">
        <div class="col-6 col-12-medium">

            <div class="image-div">
                <!-- Best image size would be 500x500 pixels-->
                <img src="<?php echo $image ?>" class="project-image" alt="Project Image">
            </div>
        </div>
        <div class="col-6 col-12-medium">
            <h3>Links</h3>
<?php
  if(count($links) == 1){
    echo '<a href="'.$links[0][0].'" class="button primary fit"><i class="icon fa-github">&nbsp;</i>'.$links[0][1].'</a>';
  }
  else{
    echo '<ul class="actions">';
    for($i=0; $i < count($links); $i++){ 
      echo '<li><a href="'.$links[$i][0].'" class="button primary fit"><i class="icon fa-github">&nbsp;</i>'.$links[$i][1].'</a></li>';
    };
    echo '</ul>';
  }
?>
    <!-- Empty paragraph for spacing purposes --> <p></p>
    <h3>Contributing Members</h3><?php echo adminContributors() ?>
    <div class="row">
    <div class="col-6 col-12-medium">
    <ul>
<?php
  if(count($contributors)%2 == 1){
    $boundary = (count($contributors)/2)+1;
  }else{
    $boundary = count($contributors)/2;
  }
  for($i=0; $i< count($contributors)/2; $i++){
    echo "<li>".$contributors[$i]."</li>";
  }
?>
    </ul>
    </div>
    <div class="col-6 col-12-medium">
    <ul>
<?php
  for($i=$boundary; $i< count($contributors); $i++){
    echo "<li>".$contributors[$i]."</li>";
  }
?>
                    </ul>
                </div>
            </div>
            <h3>Status of Project</h3><!-- Onging, complete, or stale -->
            <p><?php echo mapStatus($status) ?></p>
        </div>
    </div>
    <br>
    <h3>Description</h3><?php echo adminDescription(); ?> <!-- What is it and the purpose of the project -->
    <p id='description'>
    <?php echo $description ?>
    </p>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Milestones</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
<?php
  for($i=0;$i<count($milestones);$i++){
    echo '<tr>';
    echo '<td>'.$milestones[$i][0].'</td>';
    echo '<td>'.mapStatus($milestones[$i][1]).'</td>';
    echo '</tr>';
  }
?>
            </tbody>
        </table>
        <?php echo adminMilestone(); ?>
    </div>
</div>
</section>
<?php
  include "../api/isAdmin.php";
  if($isAdmin){
    echo "<script>";
    echo "var model = {";
    echo "contributors: ".json_encode($contributors);
    echo ", milestones: ".json_encode($milestones);
    echo ", description: ".json_encode($description);
    echo ", links: ".json_encode($links);
    echo ", status: ".json_encode($status);
    echo ", image: ".json_encode($image);
    echo ", project_name: ".json_encode($project_title);
    echo "}</script>";
  }
}
?>
