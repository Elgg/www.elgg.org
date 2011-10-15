<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Elgg - Open Source Social Networking Platform.</title>
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
		<li><a href="about.php" target="_top" class="header selected">About</a></li>
		<li><a href="http://blog.elgg.org" target="_top" class="header">Blog</a></li>
		<li><a href="services.php" class="header" target="_top">Services</a></li>
		<li><a href="hosting.php" class="header" target="_top">Hosting</a></li>
		<li><a href="http://community.elgg.org" class="header" target="_top">Community</a></li>
		<li><a href="developers.php" class="header" target="_top">Developers</a></li>
		<li><a href="download.php" target="_top" class="header">Download</a></li>
	</ul>
	</div>
</div>
<?php include("header_internal.php"); ?>
<div id="content_wrapper">
	<div class="content"><!-- open content -->
		<div id="sidebar_menu">
			<ul>
				<li><a href="about.php" class="aboutmenu">About</a></li>
				<li><a href="supporter.php" class="aboutmenu">Elgg Supporters</a></li>
				<li><a href="powering.php" class="aboutmenu">Powered by Elgg</a></li>
				<li><a href="features.php" class="aboutmenu">Features</a></li>
				<li><a href="license.php" class="aboutmenu">License</a></li>
				<li><a href="requirements.php" class="aboutmenu  selected">Requirements</a></li>
				<li><a href="domain.php" class="aboutmenu">Domain Policy</a></li>
				<li><a href="involved.php" class="aboutmenu">Getting Involved</a></li>
			</ul>
		</div>
		<div id="page_contents">
			<h1 class="header_color">Requirements</h1>
			<p class="leader">Elgg runs on a combination of the Apache web server, MySQL database system and the PHP interpreted scripting language. This is the most popular web server environment in the world.</p>
			<p class="leader">Due to Elgg's advanced functionality, there are some extra configuration requirements:</p>
			<p class="leader">The Apache web server needs to be installed with the following modules:</p>
			<ul class="list_style leader">
				<li>mod_rewrite</li>
				<li>PHP 5</li>
				<li>MySQL 5+ is needed for data storage</li>
				<li>PHP 5.2+ needs to be installed as an Apache module (not in CGI mode or safe mode) with the following libraries:
					<ul class="list_style">
						<li>GD and Freetype (for graphics processing, eg user icon rescaling and Captcha)</li>
						<li>JSON (for API functionality)</li>
						<li>XML (not installed/compiled by default on all systems)</li>
						<li>Multibyte String support (for internationalisation)</li>
					</ul>
				</li>
			</ul>
			<p class="leader">It is recommended that you increase the memory available to PHP threads beyond the standard 8 or 12M, and increase the maximum uploaded filesize (which defaults to 2M). By default, these settings have been set for you in the .htaccess file in the base Elgg directory.</p>
		</div>
		<div style="clear:both;"></div>
	</div><!-- // content -->
<?php include("globalfooter.php"); ?>
</div>
<?php include 'urchin.php'; ?>
</body>
</html>
