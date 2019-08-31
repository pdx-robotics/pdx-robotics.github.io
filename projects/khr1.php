<?php include "../parts/head.php";
	head($title="KHR-1 - Viking Robotics Society");
?>
<!--========================================================================================-->        
    
<section class="wrapper">
   
<div class="inner">
    <h1>Humanoid Robot KHR-1</h1>
        
    <div class="row">
        <div class="col-6 col-12-medium">
            
            <div class="image-div">
                <!-- Best image size would be 500x500 pixels-->
                <img src="images/khr1.png" class="project-image" alt="Project Image">
            </div>
        </div>
        
        <div class="col-6 col-12-medium">
            <h3>Links</h3>
            <ul class="actions">
                <li><a href="https://github.com/pdx-robotics/Arduino_KHR-1" class="button primary fit"><i class="icon fa-github">&nbsp;</i>Github - Arduino KHR-1</a></li>
                <li><a href="https://github.com/pdx-robotics/KinectKHR1" class="button primary fit"><i class="icon fa-github">&nbsp;</i>Github - Kinect KHR-1</a></li>
            </ul>
            
            <!-- Empty paragraph for spacing purposes --> <p></p>
            <h3>Contributing Members</h3>
            <div class="row">
                <div class="col-6 col-12-medium">
                    <ul>
                        <li>Aaron Chan</li>
                        <li>Jake Chung</li>
                        <li>Ha Ly</li>
                        <li>William Brines</li>
                    </ul>
                </div>
                <div class="col-6 col-12-medium">
                    <ul>
                        <li>Ian Eykamp</li>
			            <li>Jordan Bergmann</li>
		            	<li>Geoffrey Olson</li>
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
        The Humanoid Robot KHR-1 was made by Kondo Kagaku (近藤科学) and introduced in 2004.  
    	We have changed the control method to an Arduino-based system so that it is portable and works with the Kinect camera. 
	    By interfacing with Kinect, it is both a fun, interactive demo and a stepping stone towards more complex Kinect-driven projects and machine learning.
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
                    <td>Flag Semaphore to fix and test hardware</td>
                    <td>Complete</td>
                </tr>
                <tr>
                    <td>Interface with Kinect camera to copy arm movements</td>
                    <td>Complete</td>
                </tr>
                <tr>
                    <td>Implement a Walking Algorithm</td>
                    <td></td>
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
