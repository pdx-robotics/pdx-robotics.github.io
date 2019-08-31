<?php include "../parts/head.php";
	head("Tank 70108 - Viking Robotics Society"); 
?>
<!--========================================================================================-->        
    
<section class="wrapper">
   
<div class="inner">
    <h1>Tamiya Tank Control - Tank 70108</h1>
        
    <div class="row">
        <div class="col-6 col-12-medium">
            
            <div class="image-div">
                <!-- Best image size would be 500x500 pixels-->
                <img src="images/tank70108.png" class="project-image" alt="Project Image">
            </div>
        </div>
        
        <div class="col-6 col-12-medium">
            <h3>Links</h3>
            <a href="https://github.com/pdx-robotics/Tank-70108" class="button primary fit"><i class="icon fa-github">&nbsp;</i>Github Repository</a>
            <!-- Empty paragraph for spacing purposes --> <p></p>
            <h3>Contributing Members</h3>
            <div class="row">
                <div class="col-6 col-12-medium">
                    <ul>
                        <li>Aaron Chan</li>
                        <li>Jake Chung</li>
                        <li>Philip Proctor</li>
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
        This project is meant to be a simple introduction to robotics. 
    	Using an Arduino-based control system with a bluetooth module, 
	    we can teach programming and circuit basics to people new to engineering and robotics. 
	    It uses a vehicle chassis kit made by Tamiya that has tank treads on both sides of a wood plank. 
	    We have also used an upgrade kit that provides two motor gearboxes for individual control of each tread.
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
                    <td>Controlled Movement with Arduino</td>
                    <td>Complete</td>
                </tr>
                <tr>
                    <td>Wireless Control with Bluetooth & App</td>
                    <td>Complete</td>
                </tr>
                <tr>
                    <td>Make tutorial as Introduction to Robotics for new members</td>
                    <td>Ongoing</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
</section>

<!--========================================================================================-->
<?php include "../parts/footer.html";?>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/browser.min.js"></script>
<script src="/assets/js/breakpoints.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>
