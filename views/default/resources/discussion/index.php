<?php

$offset = get_input('offset', 0);
$limit = max(50, elgg_get_config('default_limit'));

$recentlyActive = elgg_get_entities([
	'type' => 'object',
	'subtype' => 'discussion',
	'order_by' => 'e.last_action desc',
	'limit' => $limit,
	'offset' => $offset,
	'preload_owners' => true,
	'preload_containers' => true,
]);

$discussions = (object)[
	'length' => elgg_get_entities([
		'type' => 'object',
		'subtype' => 'discussion',
		'count' => true,
	]),
	'fields' => (object)[
		'title' => (object)['label' => 'Title'],
		'replies_length' => (object)['label' => 'Replies'],
		'last_action' => (object)['label' => 'Last activity'],
	],
	'recently_active' => (object)[
		'label' => 'Latest discussion',
		'next' => (object)['label' => 'Older &raquo;'],
		'prev' => (object)['label' => '&laquo; Newer'],
		'actions' => [
			(object)[
				'label' => 'Start new discussion',
				'href' => elgg_get_site_url() . 'discussion/new',
			],
		],
		'items' => array_map(function($discussion) {
			$owner = $discussion->getOwnerEntity();
			
			return (object)[
				'author' => (object)[
					'name' => $owner->name,
					'url' => $owner->getUrl(),
					'avatar' => (object)[
						'preview' => (new ElggUser())->getIconUrl('small'),
						'40x40' => $owner->getIconUrl('small'),
						'100x100' => $owner->getIconUrl('medium'),
					],
				],
				'is_unread' => false,
				'last_action' => $discussion->last_action,
				'title' => $discussion->title,
				'url' => $discussion->getUrl(),
				'replies_length' => elgg_get_entities(array(
					'type' => 'object',
					'subtype' => 'discussion_reply',
					'container_guid' => $discussion->getGUID(),
					'count' => true,
					'distinct' => false,
				)),
			];
		}, $recentlyActive),
	],
];


elgg_register_css('resources/discussion/index', elgg_get_simplecache_url('resources/discussion/index.css'));
elgg_load_css('resources/discussion/index');
?>

<?php ob_start(); ?>
<main>
	<header class="header">
		<h1 class="title">
			<?=$discussions->recently_active->label; ?>
		</h1>
		<ul class="actions">
			<?php foreach ($discussions->recently_active->actions as $action): ?>
			<li>
				<a href="<?=$action->href?>" class="elgg-button elgg-button-special">
					<?=$action->label;?>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</header>
	<ol class="list">
		<?php foreach ($discussions->recently_active->items as $discussion): ?>
		<li class="listItem <?=$discussion->is_unread ? 'listItem--unread' : ''?>">
			<div class="listItem-author">
				<?php $avatar = $discussion->author->avatar; ?>
				<img src="<?=$avatar->preview?>" width="40" height="40"
				     srcset="<?=$avatar->{'40x40'}?> 1x, <?=$avatar->{'100x100'}?> 2.5x"
				     alt="<?=$discussion->author->name?>">
			</div>
			<div class="listItem-body">
				<a class="listItem-title"
				   href="<?=$discussion->url;?>">
					<?=$discussion->title;?>
				</a>
				<div class="listItem-metadata">
					<a href="<?=$discussion->author->url?>">
						<?=$discussion->author->name?>
					</a>
					&middot;
					<?=elgg_view('output/friendlytime', ['time' => $discussion->last_action]);?>
					&middot;
					<?=$discussion->replies_length . ' ' . elgg_echo('discussion:replies')?>
				</div>
			</div>
		</li>
		<?php endforeach; ?>
	</ol>
	<nav class="pagination">
		<?php if ($offset > 0): ?>
		<a href="?offset=<?=max(0, $offset - $limit)?>" rel="prev"
		   class="elgg-button elgg-button-action">
			<?=$discussions->recently_active->prev->label?>
		</a>
		<?php endif; ?>
		
		<?php if ($offset + $limit < $discussions->length): ?>
		<a href="?offset=<?=$limit+$offset?>" rel="next"
		   class="elgg-button elgg-button-action">
			<?=$discussions->recently_active->next->label?>
		</a>
		<?php endif; ?>
	</nav>
</main>
<?php $body = ob_get_clean(); ?>

<?php

echo elgg_view_page($title, $body);
