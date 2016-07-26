<?php

use Elgg\Releases;

$devs = Releases::getReleases(Releases::$dev_branch);
if ($devs) {
	reset($devs);
	list($dev_version, $dev_date) = each($devs);
}

$stables = Releases::getReleases(Releases::$stable_branch);
reset($stables);
list($stable_version, $stable_date) = each($stables);

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
	<link href="style2.css" rel="stylesheet" type="text/css" />

<?php include 'analytics.php'; ?>
</head>
<body id="homepage">
<?php include("globalheader.php"); ?>
<div id="content_wrapper">
	<div class="content"><!-- open content -->
		<div id="box_wrapper" class="clearfloat">
			<h1 id="logo">
				<a href="index.php" target="_top"><img src="images/spacer.gif" width="290px" height="160px" alt="Elgg.org" border="0" /></a>
			</h1>
			<div id="container_strapline">
				<h2 id="tag">
					<p><span class="strapline accent_color">Introducing a powerful open source<br />social networking engine</span></p>
					<p class="strap">Providing you with the core components you need<br />to build out socially aware applications</p>
				</h2>

				<p>
					<a style="background:#E74815;color:#fff;padding:.5em .3em;font-size:170%;border-radius:5px;display:inline-block"
					  href="download.php" class="download">Get Elgg <?= $stable_version ?>
						<?php if ($devs): ?>
								(or <?= $dev_version ?>)
						<?php endif; ?>
					</a>
				</p>

				<p style="margin-top:5px"><a style="color:#E74815" href="https://github.com/Elgg/Elgg">Elgg on GitHub</a></p>
			</div>
		</div>
		<div style="clear:both;"></div>
			<div class="community_login">
				<a href="<?= elgg_normalize_url(ELGG_COMMUNITY_THEME_SUPPORT_URL) ?>">Support Community</a>
				<?php if (!elgg_is_logged_in()): ?>
				<?= elgg_view_form('login'); ?>
				<?php endif; ?>
			</div>
		<div id="bottom"><!-- open bottom -->
		<h2>Elgg is an award-winning social networking engine, delivering the building blocks that enable businesses, schools, universities and associations to create their own fully-featured social networks and applications. Organizations with networks <a href="powering.php">powered by Elgg</a> include:</h2>
<img style="margin: 8px auto 0 auto; display: block;" src="images/customer_logos.gif" />
		</div><!-- // bottom -->

<div class="clearfloat bottom2">
	<div class="twocolbox left">
		<h1 class="header_color">Upcoming Events</h1>
		<h2>Elgg Camp Italy 2016</h2>
		<p>May 20th - 22nd: Elgg Camp Italy 2016 @ Small Business World in Montelabbate PU, Italia. <a href="https://socialbusinessworld.org/events/event/view/606289/elgg-camp-italy-2016-sbw-extended-version#.VqeN_FMrLMV">More details.</a></p>
	</div>
	<div class="twocolbox right">
		<h1 class="header_color">Contributing</h1>
		<h2>Want to improve Elgg? Check out our <a href="http://learn.elgg.org/en/1.12/contribute/index.html">contributor's guide</a>, then <a href="https://github.com/Elgg/Elgg">fork us on GitHub</a>, or <a href="https://www.transifex.com/elgg/elgg-core-2/">add some translations</a>.</h2>
	</div>

<div style="clear:both;"></div>
</div>

<div class="clearfloat bottom2">
	<div class="twocolbox left">
		<h1 class="header_color">Hosting</h1>
		<h2>Looking for a provider to host your network built on the open source engine? Find companies who specialise in <a href="hosting.php">Elgg hosting</a>.</h2>
	</div>

	<div class="twocolbox right">
		<h1 class="header_color">Giving back</h1>
		<h2>There are several ways you can help out the Elgg project. The options range from <a href="https://github.com/Elgg/Elgg/blob/master/CONTRIBUTING.md">bug reporting</a> and <a href="https://github.com/Elgg/Elgg/pulls">patch submission</a> to joining the <a href="supporter.php">supporters scheme</a> or buying a <a href="services.php">services listing</a>.</h2>
	</div>
<div style="clear:both;"></div>
</div>
<div style="clear: both;"></div>
</div><!-- // content -->

<?php include("globalfooter.php"); ?>
</div><!-- // content wrapper -->
<script src="<?= elgg_get_simplecache_url('jquery.js') ?>"></script>
<script src="<?= elgg_get_simplecache_url('resources/index.js') ?>"></script>
</body>
</html>
