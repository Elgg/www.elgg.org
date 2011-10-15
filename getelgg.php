<?php
/**
 * Redirect for downloading Elgg so that we can record this
 */

require "credentials.php";

// Where are the downloads stored?
$download_base = "http://elgg.org/download/";

// Connect to db
mysql_connect('localhost', $db_user, $db_password);
mysql_select_db('www_elgg_org');

// Sanitise plugin URL
$url = trim(mysql_real_escape_string($_GET['forward']));
if (empty($url)) {
	header("Location: http://elgg.org/downloads.php"); exit;
}

// Get existing counter, if any
if ($result = mysql_query("select count(downloads) as total from plugins where url = '{$url}'")) {
	$row = mysql_fetch_object($result);
	$count = $row->total;
} else {
	$count = 0;
}
if ($count) {
	$row = mysql_fetch_object($result);
	mysql_query("update plugins set downloads = downloads + 1 where url = '{$url}'");
} else {
	mysql_query("insert into plugins set downloads = 1, url = '{$url}'");
}

header("Location: {$download_base}{$url}");

