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
<?php include '_includes/head.php'; ?>

<?php include '_includes/download-menu.php'; ?>

<div id="page_contents">
	<h1 data-title class="header_color">Previous releases</h1>
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

<?php include '_includes/foot.php'; ?>
