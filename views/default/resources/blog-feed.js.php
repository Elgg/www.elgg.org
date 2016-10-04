<?php

$max_age = 3600 * 2;
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + $max_age), true);
header("Pragma: public", true);
header("Cache-Control: max-age=$max_age", true);
header("Content-Type; application/javascript; charset=utf-8");

$posts = elgg_get_entities([
	'type' => 'object',
	'subtype' => 'blog',
	'distinct' => false,
	'limit' => min(20, (int)get_input('limit', 10)),
]);

$items = [];
foreach ($posts as $post) {
	/* @var ElggBlog $post */
	$link = elgg_view('output/url', [
		'href' => $post->getURL(),
		'text' => $post->getDisplayName(),
	]);
	$time = date("F j, Y", $post->time_created);
	$items[] = "<li>$link<div class='elgg-text-help'>$time</div></li>";
}
$html = "<ul class='elgg-blog-posts'>" . implode('', $items) . "</ul>";

?>
elgg_blog_feed(<?= json_encode($html) ?>);
