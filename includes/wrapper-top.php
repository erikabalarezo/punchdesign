<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Punch Design</title>
   	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<header>
    <div class="logoholder">
    	<a href="index.php" title="link to Home"><img src="images/logo.png" alt="punch logo"></a>
    </div>
	<nav class="menu">
        <ul>
			<li<?php if($page == 'home') {?> class="current"<?php } ?>><a class="hometab" href="index.php">Home</a></li>
			<li<?php if($page == 'work') {?> class="current"<?php } ?>><a class = "worktab" href="work.php">Work</a></li>
			<li<?php if($page == 'about') {?> class="current"<?php } ?>><a class = "aboutab" href="about.php">About</a></li>
			<li<?php if($page == 'contact') {?> class="current"<?php } ?>><a class = "contactab" href="contact.php">Contact</a></li>	
			
        </ul>
    </nav>
	<div class="gradient"></div>
    <!--<div class="backgradient"></div>-->
    </header>
