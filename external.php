<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Elgg - Open Source Social Networking Engine.</title>
	<meta name="description" content="Elgg is a leading open source social networking engine which can be used to power your social network." /> 
	<meta name="keywords" content="open source social networking, social intranet, collaboration software, social networking software, community software, social media, social publishing, social media platform" /> 
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="style.css" rel="stylesheet" type="text/css" />
<?php include 'analytics.php'; ?>
</head>
<body>
<div id="globalheader_wrapper">
	<div id="globalheader">
	<ul>
		<li><a href="index.php" target="_top" class="header">Home</a></li>
		<li><a href="about.php" class="header">About</a></li>
		<li><a href="http://blog.elgg.org" class="header">Blog</a></li>
		<li><a href="services.php" class="header" target="_top">Services</a></li>
		<li><a href="hosting.php" class="header" target="_top">Hosting</a></li>
		<li><a href="https://community.elgg.org" class="header" target="_top">Community</a></li>
		<li><a href="developers.php" class="header selected" target="_top">Developers</a></li>
		<li><a href="download.php" target="_top" class="header">Download</a></li>
	</ul>
	</div>
</div>
<?php include("header_internal.php"); ?>
<div id="content_wrapper">
	<div class="content"><!-- open content -->
		<div id="sidebar_menu">
			<ul>
				<li><a href="developers.php" class="aboutmenu">Developer Center</a></li>
				<li><a href="external.php" class="aboutmenu  selected">External Projects</a></li>
			</ul>
		</div>
		<div id="page_contents">
			<h1 class="header_color">External Projects</h1>
			<p>The following is a list of various personal Elgg projects hosted elsewhere. These projects are not connected to the main Elgg project but they do use Elgg and build add-ons for the platform.</p>
			<p>If you know of any others that you think should be listed here, please send details to info@elgg.org.</p>
			<ul>
				<li><a href="http://github.com/cash">Cash Costello on GitHub</a><br />
				A series of very useful utilities for those running Elgg.</li><br />
				<li><a href="http://bitbucket.org/rhizomatik">rhizomatik on BitBucket</a><br />
				Plugins which provide support for: FOAFSSL, Salmon, PubSubHubBub and more.</li><br />
				<li><a href="http://code.google.com/p/tidypics/">Tidypics on Google code</a><br />
				A very popular photo gallery plugin for Elgg.</li>
			</ul>	
		<div style="clear:both;"></div>
	</div>
</div><!-- // content -->
<?php include("globalfooter.php"); ?>
</div>
<?php include 'urchin.php'; ?>
</body>
</html>	
