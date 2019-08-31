<?php include "../parts/head.php";
  head("Projects Template - Viking Robotics Society");
?>
<!--========================================================================================-->        
    
<section class="wrapper">
   
<div class="inner">
    <h1>Rock Climbing Goat</h1>
        
    <div class="row">
        <div class="col-6 col-12-medium">
            
            <div class="image-div">
                <!-- Best image size would be 500x500 pixels-->
                <img src="/projects/images/goat.png" class="project-image" alt="Rock Climbing Goat">
            </div>
        </div>
        
        <div class="col-6 col-12-medium">
            <h3>Links</h3>
            <a href="https://github.com/pdx-robotics/RockingClimbingGoat" class="button primary fit"><i class="icon fa-github">&nbsp;</i>Github Repository</a>
            <!-- Empty paragraph for spacing purposes --> <p></p>
            <h3>Contributing Members</h3>
            <div class="row">
                <div class="col-6 col-12-medium">
                    <ul>
                        <li>Preston Cazier</li>
                        <li>Geoffrey Olson</li>
                        <li>Jake Chung</li>
                    </ul>
                </div>
            </div>
            
            <h3>Status of Project</h3><!-- Onging, complete, or stale -->
            <p>Ongoing</p>
        </div>
    </div>
    
    <br>
    <h3>Description</h3> <!-- What is it and the purpose of the project -->
    <p>
        This is an integration of the Don Quixote Project. 
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
                <tr>
                    <td>Develop walking algorithm for 4 gaited model</td>
                    <td>Ongoing</td>
                </tr>
                <tr>
                    <td>Implement navigation and self-balancing</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/browser.min.js"></script>
<script src="/assets/js/breakpoints.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>

</section>

<!--========================================================================================-->        
<?php include "../parts/footer.html";?>
</body>
</html>
