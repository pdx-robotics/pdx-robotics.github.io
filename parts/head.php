<?php
function head($title){
  echo
'
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
	<title>'.$title.'</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="icon" href="/images/vrs_logo_white_icon.png"/> 
</head>
<body class="is-preload">
<!--
    Viking Robotics Society
    Header for webpages. Use SSI to include on all webpages.
-->
<!-- Header -->
    <header id="header">
        <a class="logo" href="/">
            <img src="/images/vrs_logo_white_transparentbg.png" height="50%">
        </a>
        <a class="logo" id="vrs-text" href="/">Viking Robotics Society</a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

<!-- Nav -->
    <nav id="menu">
        <ul class="links">';
            include "menuLinks.html";
        echo '</ul></nav>';
}
?>
