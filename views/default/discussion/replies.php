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

	// if not a member
	if (!elgg_is_logged_in()) {
		$log_in = elgg_view('output/url', array(
			'href' => '/login',
			'text' => 'log in'
		));

		echo "<div class=\"elgg-box elgg-state-notice\">";
			echo "You must $log_in to post replies.";
		echo "</div>";
	} elseif (!$group->isMember()) {
		// @todo override action to redirect back to thread.
		$url = current_page_url();
		$join_group = elgg_view('output/url', array(
			'href' => '/action/groups/join?group_guid=' . $group->getGUID(),
			'text' => elgg_echo('customizations:join_group:link_text'),
			'confirm' => elgg_echo('customizations:join_group:confirmation')
		));
		echo "<div class=\"elgg-box elgg-state-notice\">";
			echo elgg_echo('customizations:join_group:message', array($join_group));
		echo "</div>";
	}
}

echo '</div>';
