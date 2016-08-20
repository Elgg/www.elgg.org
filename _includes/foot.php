<?php

if (function_exists('elgg_get_site_url')) {
	$home = elgg_get_site_url();
} else {
	$home = './';
}

?>
		<div style="clear: both;"></div>
		</div><!-- #content_wrapper -->

	<?php include __DIR__ . '/globalfooter.php'; ?>

	</div><!-- .content -->
	<script src="<?= $home ?>common.js?v2"></script>

	<?php if (!empty($is_home) && function_exists('elgg_get_simplecache_url')): ?>
	<script src="<?= elgg_get_simplecache_url('jquery.js') ?>"></script>
	<script src="<?= elgg_get_simplecache_url('resources/index.js') ?>"></script>
	<?php endif; ?>

</body>
</html>
