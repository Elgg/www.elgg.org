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
<?php include '_includes/head.php'; ?>

<?php include '_includes/download-menu.php'; ?>

<div id="page_contents">
<?php if ($devs): ?>
	<h1 class="header_color">Development release - <?= $dev_date ?></h1>
	<p class="leader">
		Elgg <?= $dev_version; ?> is available for early testers. <strong style="font-weight:600">Do not use this version in production.</strong><br />
		Please report all bugs to <a href="https://github.com/Elgg/Elgg/issues">GitHub</a>.
	</p>
	<div id="download_btn">
		<p><a href="getelgg.php?forward=elgg-<?= $dev_version; ?>.zip" class="download">Download <?= $dev_version; ?></a></p>
	</div>
<?php endif; ?>
	<!-- do not remove this comment <h1 data-title>Downloads</h1>-->
	<h1 class="header_color">Stable Release - <?= $stable_date ?></h1>
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

	<div style="float:right;width:345px;border:1px solid #ddd;padding:4px;">
		<p>Elgg is available under a dual license, GPL Version 2 and the MIT license.
			<a href="http://learn.elgg.org/en/latest/intro/license.html">More info</a>.</p>
		<p>You may
			<a href="mailto:info@elgg.org">request an MIT release</a> (please specify version) or create one easily: After executing
			<code>composer install</code>, delete the contents of the <code>/mod</code> directory.</p>
	</div>

	<div id="mid_left">
		<h1>Hosting</h1>
		<p>If you are looking for somewhere to host your Elgg powered network, we are putting together a <a href="hosting.php" class="accent_color">list of providers</a> who have added Elgg hosting to their services.</p>
		<p><a href="https://partners.a2hosting.com/solutions.php?id=1686&url=443">
		<img src="images/a2hosting_mini_banner.gif" border="0" alt="A2 graphic" /></a></p>
		<p><a href="http://www.arckcloud.com/elgg-hosting/">
		<img src="images/arckcloud-small-banner.png" border="0" alt="Arckcloud Hosting" /></a></p>
		<p><a href="http://arvixe.evyy.net/c/303140/196991/3370" target="_blank">
		<img border="0" src="https://affiliates.arvixe.com/banners/266x46.Elgg.gif" width="266" height="46" alt="Arvixe Hosting"></a></p>
	</div>
	<div id="mid_right">
		<h1><a href="https://github.com/Elgg/Elgg">Elgg on GitHub</a></h1>
			<p>You can follow the latest work in progress or contribute via GitHub.</p>
			<p><a href="https://github.com/Elgg/Elgg">https://github.com/Elgg/Elgg</a></p>
	</div>
	<div style="clear:both;"></div>
</div>

<?php include '_includes/foot.php'; ?>
