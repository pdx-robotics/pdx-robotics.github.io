<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Portal</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="icon" href="/images/vrs_logo_white_icon.png"/> 
</head>

<body class="is-preload">
<?php
include "../parts/header.html";
?>
<div class="inner">
<header class="special">
<h2>Admin Section</h2>
<img src="responsibility.jpg" alt="With great power comes great responsibility"><br>
<a href="/admin/inventory">inventory</a><br>
<a href="/admin/checkout.php">check out form and database</a><br>
<a href="/admin/events.php">events on front page</a><br>
<a href="/admin/gallery">gallery</a><br>
</header>
</div>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/browser.min.js"></script>
<script src="/assets/js/breakpoints.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>
<?php
// footer
include "../parts/footer.html";
?>
</body>
</html>
