<?php
elgg_load_css('widgets/messageboard/content');

/**
 * Display a way to send a private message to user instead of messageboard
 *
 * This depends on the messages plugin.
 */

if (!elgg_is_logged_in()) {
	echo '<p>';
	echo elgg_echo('customizations:pm:logged_out');
	echo '</p>';
	return true;
}

$viewer = elgg_get_logged_in_user_entity();

$body = '<div>';
$body .= elgg_view('input/plaintext', array(
	'name' => 'body',
	'class' => 'community-pm-textarea',
));
$body .= '</div>';

$body .= '<div class="elgg-foot">';
$body .= elgg_view('input/hidden', array(
	'name' => 'subject',
	'value' => elgg_echo('customizations:pm:subject', array($viewer->name)),
));

$body .= elgg_view('input/hidden', array(
	'name' => 'recipient_username',
	'value' => elgg_get_page_owner_entity()->username,
));

$body .= elgg_view('input/hidden', array(
	'name' => 'pm_widget',
	'value' => true,
));

$body .= elgg_view('input/submit', array(
	'value' => elgg_echo('messages:fly'),
));
$body .= '</div>';

echo elgg_view('input/form', array(
	'action' => 'action/messages/send',
	'body' => $body,
));
