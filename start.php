<?php

/**
 * Elgg Community Theme
 */

// tech support discussion
define('ELGG_COMMUNITY_THEME_SUPPORT_URL', 'discussion/group/179063');

elgg_register_event_handler('init', 'system', 'community_theme_init');

function community_theme_init() {

	elgg_register_event_handler('pagesetup', 'system', 'community_theme_pagesetup', 1000);

	$url = elgg_normalize_url('/common.css');
	elgg_register_css($url, $url);
	elgg_load_css($url);

	$url = elgg_normalize_url('/common.js');
	elgg_register_js($url, $url);
	elgg_load_js($url);

	elgg_extend_view('css/elgg', 'community_theme/css');
	elgg_extend_view('forms/login', 'community_theme/new_account_msg');
	elgg_extend_view('page/elements/topbar_wrapper', 'community_theme/globalheader', 0);

	elgg_unregister_menu_item('site', 'bookmarks');
	elgg_unregister_menu_item('site', 'members');
	elgg_unregister_menu_item('site', 'pages');

	//remove "Powered by Elgg" link
	elgg_unregister_menu_item('footer', 'powered');

	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');

	elgg_register_plugin_hook_handler('forward', 'all', 'community_theme_forward');

	elgg_unregister_menu_item('site', 'blog');
	elgg_register_menu_item('site', ElggMenuItem::factory([
		'name' => 'blog',
		'href' => 'blog',
		'text' => elgg_echo('blog:title:all_blogs'),
	]));

	elgg_register_plugin_hook_handler('action', 'login', 'community_theme_login_action');

	community_theme_combine_js();
}

function community_theme_login_action() {
	if (empty($_SERVER['HTTP_REFERER'])) {
		return;
	}
	if ($_SERVER['HTTP_REFERER'] === elgg_get_site_url()) {
		elgg_get_session()->set('last_forward_from', ELGG_COMMUNITY_THEME_SUPPORT_URL);
	}
}

function community_theme_combine_js() {
	elgg_unregister_js('jquery');
	elgg_extend_view('elgg.js', 'jquery.js', 1);
	elgg_extend_view('elgg.js', 'separator.js', 1);

	elgg_unregister_js('jquery-ui');
	elgg_extend_view('elgg.js', 'jquery-ui.js', 1);
	elgg_extend_view('elgg.js', 'separator.js', 1);

	elgg_unregister_js('elgg.require_config');
	elgg_extend_view('elgg.js', 'elgg/require_config.js', 1);
	elgg_extend_view('elgg.js', 'separator.js', 1);

	elgg_unregister_js('require');
	elgg_extend_view('elgg.js', 'require.js', 1);
	elgg_extend_view('elgg.js', 'separator.js', 1);

	elgg_extend_view('elgg.js', 'separator.js');
	elgg_unregister_js('lightbox');
	elgg_extend_view('elgg.js', 'lightbox.js');

	elgg_extend_view('elgg.js', 'separator.js');
	elgg_unregister_js('elgg.ui.river');
	elgg_extend_view('elgg.js', 'elgg/ui.river.js');
}

function community_theme_forward($h, $t, $v, $p) {
	// odds are we want the Community URL instead of the home page
	$site = elgg_get_site_url();
	if ($v === $site) {
		return "{$site}activity";
	}
}

/**
 * Setup menu items
 */
function community_theme_pagesetup() {

	// Extend footer with report content link
	if (elgg_is_logged_in()) {
		elgg_unregister_menu_item('footer', 'report_this');

		$href = "javascript:elgg.forward('reportedcontent/add'";
		$href .= "+'?address='+encodeURIComponent(location.href)";
		$href .= "+'&title='+encodeURIComponent(document.title));";

		elgg_register_menu_item('extras', array(
			'name' => 'report_this',
			'href' => $href,
			'title' => elgg_echo('reportedcontent:this:tooltip'),
			'text' => elgg_view_icon('report-this'),
		));
	}

	// footer navigation
	$items = array(
		'home' => array(elgg_echo('community_theme:home'), 'elgg.org'),
		'community' => array(elgg_echo('community_theme:community'), 'community.elgg.org'),
		'blog' => array(elgg_echo('community_theme:blog'), 'blog.elgg.org'),
		'hosting' => array(elgg_echo('community_theme:hosting'), 'elgg.org/hosting.php'),
		'services' => array(elgg_echo('community_theme:services'), 'elgg.org/services.php'),
		'docs' => array(elgg_echo('community_theme:learn'), 'learn.elgg.org/'),
		'download' => array(elgg_echo('community_theme:download'), 'elgg.org/download.php'),
	);

	foreach ($items as $id => $info) {
		list($text, $href) = $info;
		$item = new ElggMenuItem($id, $text, $href);
		elgg_register_menu_item('footer_navigation', $item);
	}

	elgg_register_menu_item('footer', array(
		'name' => 'policy',
		'href' => "http://elgg.org/domain.php",
		'text' => elgg_echo('community_theme:policy'),
		'section' => 'default',
	));
}


elgg_register_event_handler('init', 'system', function() {
	// Only admins can post blogs
	elgg_register_plugin_hook_handler('container_permissions_check', 'object', function($hook, $type, $return, $params) {
		if ($params['subtype'] == 'blog') {
			return $params['user']->isAdmin();
		}
	});

	// Support for some very old URLs
	elgg_register_page_handler('requirements.php', function() {
		http_response_code(301);
		forward('http://learn.elgg.org/en/latest/intro/install.html#requirements');
	});

	elgg_register_page_handler('external.php', function() {
		http_response_code(301);
		forward('/plugins');
	});

	elgg_register_page_handler('license.php', function() {
		http_response_code(301);
		forward('http://learn.elgg.org/en/latest/intro/license.html');
	});

	// TODO(ewinslow): Patch core to make this css registration boilerplate unnecessary
	elgg_register_css('widgets/messageboard/content', elgg_get_simplecache_url('widgets/messageboard/content.css'));

	elgg_extend_view('elgg.css', 'cke.css');

	if (function_exists("elgg_ws_unexpose_function")) {
		elgg_ws_unexpose_function('auth.gettoken');
	}

	// Support for syntax-highlighting
	elgg_extend_view('elgg.css', 'pre.css');
	elgg_extend_view('elgg/wysiwyg.css', 'pre.css');

	// Allows elements like <code class="language-php">...</code>
	// These are generated by the ckeditor "codesnippet" plugin
	// NB: Won't have any effect until https://github.com/Elgg/Elgg/pull/8805 lands.
	elgg_register_plugin_hook_handler('spec', 'htmlawed', function($hook, $type, $result, $params) {
		return "$result;code=class(oneof=language-php|language-css|language-javascript)";
	});

	// Load the JS and CSS to get syntax highlighting for rendered HTML
	elgg_require_js('hljs-init');

	// filter new friendships and new bookmarks from river
	elgg_register_plugin_hook_handler('creating', 'river', function($hook, $type, $item) {
		$view = $item['view'];
		switch ($view) {
			case 'river/relationship/friend/create':
			case 'river/object/bookmarks/create':
				return false;
				break;
		}
	});

	// Delete messages from a user who is being deleted
	// TODO(ewinslow): Move to Elgg core??
	elgg_register_event_handler('delete', 'user', function($event, $type, $user) {

		// make sure we delete them all
		$entity_disable_override = access_get_show_hidden_status();
		access_show_hidden_entities(true);

		$messages = elgg_get_entities_from_metadata(array(
			'type' => 'object',
			'subtype' => 'messages',
			'metadata_name' => 'fromId',
			'metadata_value' => $user->getGUID(),
			'limit' => 0,
		));

		if ($messages) {
			foreach ($messages as $e) {
				$e->delete();
			}
		}

		access_show_hidden_entities($entity_disable_override);
	});

	// convert messageboard to private message interface
	elgg_register_widget_type('messageboard', elgg_echo("customizations:widget:pm"), elgg_echo("customizations:widget:pm:desc"), array("profile"));

	// Forward to referrer if posting PM from a widget
	elgg_register_plugin_hook_handler('forward', 'system', function() {
		if (get_input('pm_widget') == true) {
			return $_SERVER['HTTP_REFERER'];
		}
	});

	// do not want the pages link in hover menu
	elgg_unextend_view('profile/menu/links', 'pages/menu');

	// button for flushing apc cache
	elgg_register_plugin_hook_handler('register', 'menu:admin_control_panel', function($hook, $type, $menu, $params) {
		$options = array(
			'name' => 'flush_apc',
			'text' => elgg_echo('apc:flush'),
			'href' => 'action/admin/flush_apc',
			'is_action' => true,
			'link_class' => 'elgg-button elgg-button-action',
		);
		$menu[] = ElggMenuItem::factory($options);
		return $menu;
	});

	$actions = __DIR__ . "/actions";
	elgg_register_action('admin/flush_apc', "$actions/admin/flush_apc.php", 'admin');
});
