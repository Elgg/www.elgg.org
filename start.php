<?php
namespace Elgg\Www;


function init() {
	elgg_register_plugin_hook_handler('register', 'menu:title', 'Elgg\Www\remove_discussion_add_button');
}

/**
 * Remove the group add button for non-admins
 *
 * @param string $hook Hook name
 * @param string $type Hook type
 * @param array  $menu Array of ElggMenuItem objects
 * 
 * @return array
 */
function remove_discussion_add_button($hook, $type, $menu) {
	if (elgg_get_context() == 'discussion') {
		foreach ($menu as $index => $item) {
			if ($item->getName() == 'add') {
				unset($menu[$index]);
			}
		}
	}
	return $menu;
}

elgg_register_event_handler('init', 'system', 'Elgg\Www\init');
