<?php

require __DIR__ . '/vendor/autoload.php';

use Elgg\Releases;

// TODO do we want to show -rc/beta/alpha releases?

function release_li($version, $date, $in_git = true) {
	$git_link = '';
	if ($in_git) {
		$git_link = ", <a href='https://github.com/Elgg/Elgg/tree/$version'>source</a>";
	}
	return "<li><b>$version</b> (<a href='getelgg.php?forward=elgg-{$version}.zip'>zip</a>$git_link) - released $date </li>";
}

?>
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
				<li><a href="download.php" class="aboutmenu">Download Elgg</a></li>
				<li><a href="previous.php" class="aboutmenu selected">Previous releases</a></li>
				<li><a href="https://community.elgg.org/plugins" class="aboutmenu">Community plugins</a></li>
			</ul>
		</div>
		<div id="page_contents">
			<h1 class="header_color">Previous releases</h1>
			<ul class="elgg-releases">
			<?php

			$releases = Releases::getReleases(Releases::$stable_branch, false);
			array_shift($releases);
			foreach ($releases as $version => $date) {
				echo release_li($version, $date);
			}

			$releases = Releases::getReleases(Releases::$lts_branch, false);
			array_shift($releases);
			foreach ($releases as $version => $date) {
				echo release_li($version, $date);
			}
			?>
			</ul>

			<h1 class="header_color">Security releases</h1>
			<?php
			$branches = Releases::$security_branches;
			$last_branch = array_pop($branches);
			?>
			<p><b>Elgg <?= implode(', ', $branches) ?>, and <?= $last_branch ?> are receiving only security updates.</b></p>
			<ul class="elgg-releases">
			<?php
			foreach (Releases::$security_branches as $branch) {
				$releases = Releases::getReleases($branch);
				foreach ($releases as $version => $date) {
					echo release_li($version, $date);
				}
			}
			?>
			</ul>

			<h1 class="header_color">Unsupported releases</h1>
			<p><b>These versions of Elgg are no longer supported:</b></p>
			<ul class="elgg-releases">
			<?php
			foreach (Releases::getUnsupportedReleases() as $version => $date) {
				echo release_li($version, $date, !in_array($version, Releases::$untagged_releases));
			}
			?>
			</ul>
		</div>
		<div style="clear:both;"></div>
	</div><!-- // content -->
<?php include("globalfooter.php"); ?>
</div>
</body>
</html>
