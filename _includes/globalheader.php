<?php

if (function_exists('elgg_get_site_url')) {
	$home = elgg_get_site_url();
} else {
	$home = './';
}

?>
<div id="globalheader_wrapper">
	<div id="globalheader">
		<ul>
			<li class="home-link"><a href="<?= $home ?>" class="header"><img src="<?= $home ?>views/default/community_theme/graphics/logo.png" alt="Elgg"></a></li>
			<li><a href="<?= $home ?>about.php" class="header">About</a></li>
			<li><a data-path="/blog/" href="<?= $home ?>blog" class="header">Blog</a></li>
			<li><a href="<?= $home ?>services.php" class="header">Services</a></li>
			<li><a href="<?= $home ?>hosting.php" class="header">Hosting</a></li>
			<li><a href="<?= $home ?>activity" id="community-link" class="header">Community</a></li>
			<li><a href="<?= $home ?>developers.php" class="header">Developers</a></li>
			<li><a href="<?= $home ?>download.php" class="header">Download</a></li>
		</ul>
	</div>
</div>
