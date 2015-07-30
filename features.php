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
		<li><a href="blog" target="_top" class="header">Blog</a></li>
		<li><a href="services.php" class="header" target="_top">Services</a></li>
		<li><a href="hosting.php" class="header" target="_top">Hosting</a></li>
		<li><a href="activity" class="header" target="_top">Community</a></li>
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
				<li><a href="features.php" class="aboutmenu selected">Features</a></li>
				<li><a href="license.php" class="aboutmenu">License</a></li>
				<li><a href="requirements.php" class="aboutmenu">Requirements</a></li>
				<li><a href="domain.php" class="aboutmenu">Domain Policy</a></li>
				<li><a href="involved.php" class="aboutmenu">Getting Involved</a></li>
			</ul>
		</div>
		<div id="page_contents">
			<h1 class="header_color">Highlighed features</h1>
			<div style="margin-top:20px;">
			<p class="leader"><span class="header_color">Powerful Data Model</span><br/>
					Elgg provides a powerful data model making the creation of different entities simple, yet flexible.
			</p>
			<p class="leader"><span class="header_color">Activity Streams</span><br/>
					The granular activity stream API ensures your plugins can push the required content to your users.
			</p>
			<p class="leader"><span class="header_color">Plugin API</span><br/>
					Use Elgg's powerful plugin API to build and add your required features.
			</p>
			<p class="leader"><span class="header_color">User Management</span><br/>
					Elgg handles your user management and relationship requirements.
			</p>
			<p class="leader"><span class="header_color">Access controls</span><br/>
					All objects in Elgg can have an access control level applied making granular access permissions possible.
			</p>
			<p class="leader"><span class="header_color">Web Services API</span><br/>
					Expose functionality through the REST API by building a plugin and then either publish the API for other developers to build clients or provide your own.
			</p>
			</div>

			<div style="clear:both;"></div>
			<p class="leader">Browse the <a href="https://community.elgg.org/plugins" class="accent_color">plugins gallery</a> to find other exciting features to add to your Elgg network.</p>
		</div>
		<div style="clear:both;"></div>
	</div><!-- // content -->
<?php include("globalfooter.php"); ?>
</div>
<?php include 'urchin.php'; ?>
</body>
</html>
