<?php 
  include 'isAdmin.php';
  include "../parts/head.php";
  head($title="Admin Portal");
?>
<div class="inner">
  <h2>Admin Section</h2>
  <div class="row">
    <div class="col-4 col-12-medium">
      <ul style="list-style-type:none;">
      <li><a href="/admin/inventory">inventory</a></li>
      <li><a href="/admin/checkout.php">check out form and database</a></li>
      <li><a href="/admin/events.php">events on front page</a></li>
      <li><a href="/admin/gallery.php">gallery</a></li>
      <li><a href="/admin/logout.php">logout</a></li>
      </ul>
    </div>
    <div class="col-4 col-12-medium">
      <img src="responsibility.jpg" alt="With great power comes great responsibility">
    </div>
  </div>
</div>
<?php
  // footer
  include "../parts/footer.html";
?>
</body>
</html>
