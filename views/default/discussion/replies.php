<?php
/**
 * List replies with optional add form
 *
 * @mod If not showing the form because they can't reply, show a message why.
 *
 * @uses $vars['entity']        ElggEntity
 * @uses $vars['show_add_form'] Display add form or not
 */

$show_add_form = elgg_extract('show_add_form', $vars, true);
$topic = elgg_extract('topic', $vars);

echo '<div id="group-replies" class="mtl">';

$replies = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'discussion_reply',
	'container_guid' => $topic->getGUID(),
	'reverse_order_by' => true,
));

if ($replies) {
	echo '<h3>' . elgg_echo('discussion:replies') . '</h3>';
	echo $replies;
}

if ($show_add_form) {
	$form_vars = array('class' => 'mtm');
	echo elgg_view_form('discussion/reply/save', $form_vars, $vars);
} elseif ($topic->status != 'closed') {
	$group = $topic->getContainerEntity();
	/* @var ElggGroup $group */

	// if not a member
	if (!elgg_is_logged_in()) {
		echo elgg_view('output/url', array(
			'href' => '/login',
			'text' => 'You must log in to post replies.',
			'class' => 'elgg-box elgg-state-notice elgg-login-to-post',
			'style' => 'display:block',
		));
		elgg_require_js('elgg/login-to-reply');

	} elseif (!$group->isMember()) {
		// @todo override action to redirect back to thread.
		echo elgg_view('output/confirmlink', array(
			'href' => '/action/groups/join?group_guid=' . $group->getGUID(),
			'text' => elgg_echo('customizations:join_group:link_text'),
			'confirm' => elgg_echo('customizations:join_group:confirmation'),
			'class' => 'elgg-box elgg-state-notice',
			'style' => 'display:block',
		));
	}
}

echo '</div>';
