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
  echo '
<section class="wrapper">
<div class="inner">
    <h1>'.$project_title.'</h1>
    <div class="row">
        <div class="col-6 col-12-medium">

            <div class="image-div">
                <!-- Best image size would be 500x500 pixels-->
                <img src="'.$image.'" class="project-image" alt="Project Image">
            </div>
        </div>

        <div class="col-6 col-12-medium">
            <h3>Links</h3>';
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
  echo ' 
    <!-- Empty paragraph for spacing purposes --> <p></p>
    <h3>Contributing Members</h3>
    <div class="row">
    <div class="col-6 col-12-medium">
    <ul>';
  if(count($contributors)%2 == 1){
    $boundary = (count($contributors)/2)+1;
  }else{
    $boundary = count($contributors)/2;
  }
  for($i=0; $i< count($contributors)/2; $i++){
    echo "<li>".$contributors[$i]."</li>";
  }
  echo ' 
    </ul>
    </div>
    <div class="col-6 col-12-medium">
    <ul>';
  for($i=$boundary; $i< count($contributors); $i++){
    echo "<li>".$contributors[$i]."</li>";
  }
  echo '
                    </ul>
                </div>
            </div>

            <h3>Status of Project</h3><!-- Onging, complete, or stale -->
            <p>'.mapStatus($status).'</p>
        </div>
    </div>

    <br>
    <h3>Description</h3> <!-- What is it and the purpose of the project -->
    <p>
    '.$description.'
    </p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Milestones</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>';
  for($i=0;$i<count($milestones);$i++){
    echo '<tr>';
    echo '<td>'.$milestones[$i][0].'</td>';
    echo '<td>'.mapStatus($milestones[$i][1]).'</td>';
    echo '</tr>';
  }
  echo '
            </tbody>
        </table>
    </div>
</div>
</section>
';
}
?>
