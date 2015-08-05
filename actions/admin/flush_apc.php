<?php
/**
 * Flush the APC opcode cache
 */

if (function_exists('apc_clear_cache')) {
	if (apc_clear_cache('opcode')) {
		system_message(elgg_echo('apc:flush:success'));
		forward(REFERER);
	}
}

register_error(elgg_echo('apc:flush:fail'));
