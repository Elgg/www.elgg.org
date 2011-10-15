<?php

$services = array(
	array(
		'name' => 'Keetup Development',
		'url' => 'http://www.keetup.com/elgg-services',
		'profile_url' => 'http://community.elgg.org/pg/profile/pedroprez',
		'blurb' => 'We are professional Elgg developers specializing in plugins, themes and social networking advice. We also advise companies on Elgg implementations.',
		'icon_filename' => 'keetup.png'
	),
	array(
		'name' => 'Arck Interactive',
		'url' => 'http://www.arckinteractive.com/services/elgg-development.php',
		'profile_url' => 'http://community.elgg.org/pg/profile/arckinteractive',
		'blurb' => 'We are a Chicago-based web development agency focused on developing custom social networks, intranets and other applications using Elgg.',
		'icon_filename' => 'arck.jpg'
	),

	array(
		'name' => 'Condiminds',
		'url' => 'http://condiminds.com/elgg.html',
		'profile_url' => 'http://community.elgg.org/pg/profile/tulicipriota',
		'blurb' => 'We are Elgg specialists! We specialize on Elgg themes, plugins and sites from the scratch. We are ready to provide flexible and scalable solutions for organizations, groups and individuals.',
		'icon_filename' => 'condi-minds.jpg'
	),


	array(
		'name' => 'Team Webgalli',
		'url' => 'http://webgalli.com/',
		'profile_url' => 'http://community.elgg.org/pg/profile/webgalli',
		'blurb' => 'We are a web development company from India, specialized in Elgg Social network theme / plugin development and consultancy services.',
		'icon_filename' => 'webgalli.png'
	),
);

shuffle($services);

?>
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
		<li><a href="about.php" target="_top" class="header">About</a></li>
		<li><a href="http://blog.elgg.org" class="header">Blog</a></li>
		<li><a href="partners.php" class="header selected" target="_top">Services</a></li>
		<li><a href="hosting.php" class="header" target="_top">Hosting</a></li>
		<li><a href="http://community.elgg.org" class="header" target="_top">Community</a></li>
		<li><a href="developers.php" class="header" target="_top">Developers</a></li>
		<li><a href="download.php" target="_top" class="header">Download</a></li>
	</ul>
	</div>
</div>
<?php include("header_internal.php"); ?>
<div id="content_wrapper">
	<div class="content">
		<div id="sidebar_menu">
				<div class="sidebar_box">
					<h2>*Get Listed</h2>
					The service listing feature is currently on hold while we establish the Elgg Foundation. Watch this space and the <a href="http://blog.elgg.org" style="padding: 0;">Elgg Blog</a> for more information!
					<!--
					<p>The following is a list of companies who offer various Elgg services which is provided to help Elgg users looking for services. Curverider Ltd does not endorse the companies listed and they are in no way affiliated with Curverider Ltd unless stated as an official Elgg Partner, although they do help support core Elgg development through a <b>$150 per 30 day</b> listing fee. All the money raised via these listings goes straight into core Elgg development!</p>
					<p>We constantly monitor companies listed here to help create and foster good options for those requiring Elgg services. If you encounter issues with one of the providers listed here, please get in touch with us. If you are going to get in touch, please make sure you provide adequate detail regarding the issues you have had.</p>
					<p>If you represent a company providing Elgg services and would like to be listed, and in turn help with core development, <a href="mailto:info@elgg.com">please get in touch</a> <small>(info@elgg.com)</small>. At this time, we can only use PayPal, so payment for a listing will come via a PayPal invoice.</p>
					<p><small>We reserve the right to remove or refuse a listing without any prior warning at our complete discretion. There is no refund policy.</small></p>
-->
				</div>
		</div>
		<div id="page_contents">
				<h1 class="header_color">Elgg services</h1>
				<div class="partners"> 
					<h2 class="subhead">Thematic Networks</h2> 
				<p style="margin-top:10px;"><img src="images/tn_logo.png" alt="Thematic Networks" align="left" style="margin:0 10px 10px 0;"/> 
<a href="http://thematic.net">Thematic Networks</a> creates socially-enabled web platforms with enterprise tools that help businesses to engage with their communities and generate revenue from published digital content. Our solutions power all sorts of applications, ranging from Software-as-a-Service networks at <a href="http://elgg.com">www.Elgg.com</a> through to customized enterprise social networks, corporate e-learning platforms and social marketplaces with App Stores.
<br />
Thematic Networks is a founding member and proud supporter of the Elgg Foundation.
<br /><br />
Contact: <a href="mailto:services@thematic.net">services@thematic.net</a>
</p>
				<div style="clear:both;"></div>
				</div>  
				
				<h1>Listings</h1>
<?php

foreach ($services as $service) {
	echo <<<___HTML
<div class="award">
<p><a href="{$service['url']}"><img src="images/services/{$service['icon_filename']}" alt="{$service['name']}" align="left" style="margin-right:10px;" width="40px" /></a><b>{$service['name']}</b><br />
{$service['blurb']}<br />
<a href="{$service['url']}">{$service['name']} website</a> | <a href="{$service['profile_url']}">{$service['name']} Elgg community profile</a></p>
</div>
___HTML;
}

?>

				<p style="margin:100px 0 0 0;"> ------------------- </p>
				<div class="award"><p>					
					<img src="images/sample.jpg" alt="Sample" align="left" style="margin-right:10px;" width="40px" />
					This is a sample listing. You get 20 words, a link and 40 * 40 icon. $150 per 30 day listing fee* which goes directly towards core Elgg development. Listing order is first come, first serve.<br />
					<a href="">sample company</a></p>
					<div style="clear:both;"></div>
				</div>	
		</div>
		<div style="clear:both;"></div>
	</div>
<?php include("globalfooter.php"); ?>
</div>
<?php include 'urchin.php'; ?>
</body>
</html>	
