<?php

if (function_exists('elgg_get_site_url')) {
	$home = elgg_get_site_url();
} else {
	$home = './';
}

if (empty($is_home)) {
	$body_attrs = '';
	ob_start(function ($html) {
		// if h1.data-title exists, use its contents to rewrite the title element

		if (preg_match('~<h1 data-title[^>]*>([^<]*)</h1>~', $html, $m)) {
			$title = "{$m[1]} : Elgg";
			$html = preg_replace('~(<title>)([^<]*)(</title>)~', "\$1$title\$3", $html);
		}

		return $html;
	});
} else {
	$body_attrs = 'id="homepage"';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Elgg - Open Source Social Networking Platform.</title>
	<meta name="description" content="Elgg is a leading open source social networking engine which can be used to power your social network.">
	<meta name="keywords" content="open source social networking, social intranet, collaboration software, social networking software, community software, social media, social publishing, social media platform">
	<meta name="robots" content="index, follow">
	<link rel="shortcut icon" href="<?= $home ?>favicon.ico">
	<link href="<?= $home ?>non-community.css?v2" rel="stylesheet" type="text/css">
	<link href="<?= $home ?>common.css?v2" rel="stylesheet" type="text/css">
	<?php include __DIR__ . '/analytics.php'; ?>
	<?php if (!empty($append_head)) { echo $append_head; } ?>
</head>

<body <?= $body_attrs ?>>

	<?php include __DIR__ . '/globalheader.php'; ?>

	<div id="content_wrapper"><!-- #content_wrapper -->
		<div class="content"><!-- .content -->