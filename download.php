<?php

require __DIR__ . '/vendor/autoload.php';

use Elgg\Releases;

$devs = Releases::getReleases(Releases::$dev_branch);
if ($devs) {
	reset($devs);
	list($dev_version, $dev_date) = each($devs);
}

$stables = Releases::getReleases(Releases::$stable_branch);
reset($stables);
list($stable_version, $stable_date) = each($stables);

$lts_releases = Releases::getReleases(Releases::$lts_branch);
reset($lts_releases);
list($lts_version, $lts_date) = each($lts_releases);

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
</head>
<?php include 'analytics.php'; ?>
<body>
<div id="globalheader_wrapper">
	<div id="globalheader">
	<ul>
		<li><a href="index.php" target="_top" class="header">Home</a></li>
		<li><a href="about.php" target="_top" class="header">About</a></li>
		<li><a href="blog" target="_top" class="header">Blog</a></li>
		<li><a href="services.php" class="header" target="_top">Services</a></li>
		<li><a href="hosting.php" class="header" target="_top">Hosting</a></li>
		<li><a href="activity" class="header" target="_top">Community</a></li>
		<li><a href="developers.php" class="header" target="_top">Developers</a></li>
		<li><a href="#" target="_top" class="header selected">Download</a></li>
	</ul>
	</div>
</div>
<?php include("header_internal.php"); ?>
<div id="content_wrapper">
	<div class="content"><!-- open content -->
		<div id="sidebar_menu">
			<ul>
				<li><a href="download.php" class="aboutmenu selected">Download</a></li>
				<li><a href="previous.php" class="aboutmenu">Previous releases</a></li>
				<li><a href="https://community.elgg.org/plugins" class="aboutmenu">Plugins</a></li>
			</ul>
			<div style="margin:20px 0 20px 0;">
			<h1>Support Elgg</h1>
			<p style="margin-top:20px;">If you are using Elgg and find it useful, please consider joining the <a href="supporter.php">Elgg Supporters scheme</a> and help fund core development.</p>
			<p style="margin-top:20px;">If you make money offering Elgg services then why not help core development by buying a listing on the services page? <a href="services.php">Elgg Services</a>.</p>
			</div>
		</div>

		<div id="page_contents">
		<?php if ($devs): ?>
			<h1 class="header_color" style="margin-top:40px;">Development release - <?= $dev_date ?></h1>
			<p class="leader">
				Elgg <?= $dev_version; ?> is available for early testers. <strong style="font-weight:600">Do not use this version in production.</strong><br />
				Please report all bugs to <a href="https://github.com/Elgg/Elgg/issues">GitHub</a>.
			</p>
			<div id="download_btn">
				<p><a href="getelgg.php?forward=elgg-<?= $dev_version; ?>.zip" class="download">Download <?= $dev_version; ?></a></p>
			</div>
		<?php endif; ?>

			<h1 class="header_color" style="margin-top:40px;">Stable Release - <?= $stable_date ?></h1>
			<p class="leader">
				Elgg <?= $stable_version ?> (<a href="https://github.com/Elgg/Elgg/blob/<?= $stable_version ?>/CHANGELOG.md">changelog</a>)
				is the latest and recommended version of Elgg.
			</p>
			<div id="download_btn">
				<p><a href="getelgg.php?forward=elgg-<?= $stable_version ?>.zip" class="download">Download <?= $stable_version ?></a></p>
			</div>
			<p>You can alternately clone our <a href="https://github.com/Elgg/starter-project">starter project repo</a> and install with composer.</p>

			<h1 class="header_color" style="margin-top:40px;">LTS Release - <?= $lts_date ?></h1>
			<p class="leader">
				Elgg <?= $lts_version ?> (<a href="https://github.com/Elgg/Elgg/blob/<?= $lts_version ?>/CHANGELOG.md">changelog</a>) is the recommended release if using Elgg <?= Releases::$lts_branch ?>.<br />
			</p>
			<div id="download_btn">
				<p><a href="getelgg.php?forward=elgg-<?= $lts_version ?>.zip" class="download">Download <?= $lts_version ?></a></p>
			</div>

			<div style="float:right;width:300px;border:1px solid #ddd;padding:4px;">
				<p style="font-size:small;">Elgg is available under a dual license, GPL Version 2 and the MIT license.
				The plugins are only available in the GPL release and so have been removed from the MIT release.</p>
			<?php if ($devs): ?>
				<h3>Download: <a href="getelgg.php?forward=elgg-<?= $dev_version ?>-mit.zip" class="download"><?= $dev_version ?> MIT version</a></h3>
			<?php endif; ?>
				<h3>Download: <a href="getelgg.php?forward=elgg-<?= $stable_version ?>-mit.zip" class="download"><?= $stable_version ?> MIT version</a></h3>
				<h3>Download: <a href="getelgg.php?forward=elgg-<?= $lts_version ?>-mit.zip" class="download"><?= $lts_version ?> MIT version</a></h3>
			</div>

		<div id="mid_left">
			<h1>Hosting</h1>
			<p>If you are looking for somewhere to host your Elgg powered network, we are putting together a <a href="hosting.php" class="accent_color">list of providers</a> who have added Elgg hosting to their services.</p>
			<p><a href="https://partners.a2hosting.com/solutions.php?id=1686&url=443">
			<img src="images/a2hosting_mini_banner.gif" border="0" alt="A2 graphic" /></a></p>
			<p><a href="http://www.arckcloud.com/elgg-hosting/">
			<img src="images/arckcloud-small-banner.png" border="0" alt="Arckcloud Hosting" /></a></p>
			<p><a href="http://www.arvixe.com/161-9-1-21.html" target="_blank">
			<img border="0" src="https://affiliates.arvixe.com/banners/266x46.Elgg.gif" width="266" height="46" alt="Arvixe Hosting"></a></p>
				</div>
		<div id="mid_right">
			<h1>Developer Access</h1>
				<p>If you're a developer and want the latest code you can grab the latest work in progress through GitHub:</p>
				<p><a href="https://github.com/Elgg/Elgg">https://github.com/Elgg/Elgg</a></p>
		</div>
		<div style="clear:both;"></div>
	</div>
	</div><!-- // content -->
<?php include("globalfooter.php"); ?>
</div>
<!-- test deploy -->
</body>
</html>
